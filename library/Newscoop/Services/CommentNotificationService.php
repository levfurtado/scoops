<?php
/**
 * @package Newscoop
 * @copyright 2011 Sourcefabric o.p.s.
 * @license http://www.gnu.org/licenses/gpl-3.0.txt
 */
namespace Newscoop\Services;

use Newscoop\EventDispatcher\Events\GenericEvent;
use Doctrine\ORM\EntityManager;
use Newscoop\Exception\AuthenticationException;

/**
 */
class CommentNotificationService
{
    /** @var Newscoop\Services\EmailService */
    protected $emailService;

    /** @var Newscoop\Services\CommentService */
    protected $commentService;

    /** @var Newscoop\Services\UserService */
    protected $userService;

    /** @var Doctrine\ORM\EntityManager */
    protected $em;

    /**
     * @param Newscoop\Services\EmailService   $emailService
     * @param Newscoop\Services\CommentService $commentService
     * @param Newscoop\Services\User           $userService
     * @param Doctrine\ORM\EntityManager       $em
     */
    public function __construct(EmailService $emailService, CommentService $commentService, UserService $userService, EntityManager $em)
    {
        $this->emailService = $emailService;
        $this->commentService = $commentService;
        $this->userService = $userService;
        $this->em = $em;
    }

    /**
     * Update
     *
     * @param GenericEvent $event
     *
     * @return void
     */
    public function update(GenericEvent $event)
    {
        $comment = $this->commentService->find($event['id']);
        $article = $this->em->getRepository('Newscoop\Entity\Article')
            ->getArticle($comment->getThread(), $comment->getLanguage()->getId())
            ->getSingleResult();

        try {
            $user = $this->userService->getCurrentUser();
        } catch (AuthenticationException $e) {
            $user = null;
        }

        $authors = \ArticleAuthor::GetAuthorsByArticle($comment->getThread(), $comment->getLanguage()->getId());
        $this->emailService->sendCommentNotification($comment, $article, $authors, $user);
    }
}
