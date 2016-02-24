<?php
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InactiveScopeException;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;
class applicationProdProjectContainer extends Newscoop\DependencyInjection\ContainerBuilder
{
    private $parameters;
    private $targetDirs = array();
    public function __construct()
    {
        $dir = __DIR__;
        for ($i = 1; $i <= 3; ++$i) {
            $this->targetDirs[$i] = $dir = dirname($dir);
        }
        $this->parameters = $this->getDefaultParameters();
        $this->services =
        $this->scopedServices =
        $this->scopeStacks = array();
        $this->set('service_container', $this);
        $this->scopes = array('request' => 'container');
        $this->scopeChildren = array('request' => array());
        $this->methodMap = array(
            'annotation_reader' => 'getAnnotationReaderService',
            'article.link' => 'getArticle_LinkService',
            'article.repository' => 'getArticle_RepositoryService',
            'articles.hooks.listener' => 'getArticles_Hooks_ListenerService',
            'assetic.asset_factory' => 'getAssetic_AssetFactoryService',
            'assetic.asset_manager' => 'getAssetic_AssetManagerService',
            'assetic.filter.cssrewrite' => 'getAssetic_Filter_CssrewriteService',
            'assetic.filter_manager' => 'getAssetic_FilterManagerService',
            'assetic.helper.static' => 'getAssetic_Helper_StaticService',
            'attachment' => 'getAttachmentService',
            'audit' => 'getAuditService',
            'audit.maintenance' => 'getAudit_MaintenanceService',
            'auth.adapter' => 'getAuth_AdapterService',
            'auth.adapter.social' => 'getAuth_Adapter_SocialService',
            'author' => 'getAuthorService',
            'bazinga.jstranslation.controller' => 'getBazinga_Jstranslation_ControllerService',
            'bazinga.jstranslation.translation_dumper' => 'getBazinga_Jstranslation_TranslationDumperService',
            'bazinga.jstranslation.translation_finder' => 'getBazinga_Jstranslation_TranslationFinderService',
            'blog' => 'getBlogService',
            'cache_clearer' => 'getCacheClearerService',
            'cache_warmer' => 'getCacheWarmerService',
            'comment' => 'getCommentService',
            'comment.repository' => 'getComment_RepositoryService',
            'comment_notification' => 'getCommentNotificationService',
            'content.publication' => 'getContent_PublicationService',
            'content.section' => 'getContent_SectionService',
            'content.type' => 'getContent_TypeService',
            'controller_name_converter' => 'getControllerNameConverterService',
            'controller_resolver' => 'getControllerResolverService',
            'debug.emergency_logger_listener' => 'getDebug_EmergencyLoggerListenerService',
            'doctrine' => 'getDoctrineService',
            'doctrine.adodb' => 'getDoctrine_AdodbService',
            'doctrine.connection' => 'getDoctrine_ConnectionService',
            'doctrine.dbal.connection_factory' => 'getDoctrine_Dbal_ConnectionFactoryService',
            'doctrine.dbal.default_connection' => 'getDoctrine_Dbal_DefaultConnectionService',
            'doctrine.event_manager' => 'getDoctrine_EventManagerService',
            'doctrine.orm.default_entity_manager' => 'getDoctrine_Orm_DefaultEntityManagerService',
            'doctrine.orm.default_manager_configurator' => 'getDoctrine_Orm_DefaultManagerConfiguratorService',
            'doctrine.orm.validator.unique' => 'getDoctrine_Orm_Validator_UniqueService',
            'doctrine.orm.validator_initializer' => 'getDoctrine_Orm_ValidatorInitializerService',
            'email' => 'getEmailService',
            'event_dispatcher' => 'getEventDispatcherService',
            'ewz_recaptcha.form.type' => 'getEwzRecaptcha_Form_TypeService',
            'ewz_recaptcha.validator.true' => 'getEwzRecaptcha_Validator_TrueService',
            'file_locator' => 'getFileLocatorService',
            'filesystem' => 'getFilesystemService',
            'form.csrf_provider' => 'getForm_CsrfProviderService',
            'form.factory' => 'getForm_FactoryService',
            'form.registry' => 'getForm_RegistryService',
            'form.resolved_type_factory' => 'getForm_ResolvedTypeFactoryService',
            'form.type.birthday' => 'getForm_Type_BirthdayService',
            'form.type.button' => 'getForm_Type_ButtonService',
            'form.type.checkbox' => 'getForm_Type_CheckboxService',
            'form.type.choice' => 'getForm_Type_ChoiceService',
            'form.type.collection' => 'getForm_Type_CollectionService',
            'form.type.country' => 'getForm_Type_CountryService',
            'form.type.currency' => 'getForm_Type_CurrencyService',
            'form.type.date' => 'getForm_Type_DateService',
            'form.type.datetime' => 'getForm_Type_DatetimeService',
            'form.type.email' => 'getForm_Type_EmailService',
            'form.type.entity' => 'getForm_Type_EntityService',
            'form.type.file' => 'getForm_Type_FileService',
            'form.type.form' => 'getForm_Type_FormService',
            'form.type.hidden' => 'getForm_Type_HiddenService',
            'form.type.integer' => 'getForm_Type_IntegerService',
            'form.type.language' => 'getForm_Type_LanguageService',
            'form.type.locale' => 'getForm_Type_LocaleService',
            'form.type.money' => 'getForm_Type_MoneyService',
            'form.type.number' => 'getForm_Type_NumberService',
            'form.type.password' => 'getForm_Type_PasswordService',
            'form.type.percent' => 'getForm_Type_PercentService',
            'form.type.radio' => 'getForm_Type_RadioService',
            'form.type.repeated' => 'getForm_Type_RepeatedService',
            'form.type.reset' => 'getForm_Type_ResetService',
            'form.type.search' => 'getForm_Type_SearchService',
            'form.type.submit' => 'getForm_Type_SubmitService',
            'form.type.text' => 'getForm_Type_TextService',
            'form.type.textarea' => 'getForm_Type_TextareaService',
            'form.type.time' => 'getForm_Type_TimeService',
            'form.type.timezone' => 'getForm_Type_TimezoneService',
            'form.type.url' => 'getForm_Type_UrlService',
            'form.type_extension.csrf' => 'getForm_TypeExtension_CsrfService',
            'form.type_extension.form.http_foundation' => 'getForm_TypeExtension_Form_HttpFoundationService',
            'form.type_extension.form.validator' => 'getForm_TypeExtension_Form_ValidatorService',
            'form.type_extension.repeated.validator' => 'getForm_TypeExtension_Repeated_ValidatorService',
            'form.type_extension.submit.validator' => 'getForm_TypeExtension_Submit_ValidatorService',
            'form.type_guesser.doctrine' => 'getForm_TypeGuesser_DoctrineService',
            'form.type_guesser.validator' => 'getForm_TypeGuesser_ValidatorService',
            'fos_js_routing.controller' => 'getFosJsRouting_ControllerService',
            'fos_js_routing.extractor' => 'getFosJsRouting_ExtractorService',
            'fos_js_routing.serializer' => 'getFosJsRouting_SerializerService',
            'fos_oauth_server.access_token_manager.default' => 'getFosOauthServer_AccessTokenManager_DefaultService',
            'fos_oauth_server.auth_code_manager.default' => 'getFosOauthServer_AuthCodeManager_DefaultService',
            'fos_oauth_server.authorize.form' => 'getFosOauthServer_Authorize_FormService',
            'fos_oauth_server.authorize.form.handler.default' => 'getFosOauthServer_Authorize_Form_Handler_DefaultService',
            'fos_oauth_server.authorize.form.type' => 'getFosOauthServer_Authorize_Form_TypeService',
            'fos_oauth_server.client_manager.default' => 'getFosOauthServer_ClientManager_DefaultService',
            'fos_oauth_server.controller.token' => 'getFosOauthServer_Controller_TokenService',
            'fos_oauth_server.entity_manager' => 'getFosOauthServer_EntityManagerService',
            'fos_oauth_server.refresh_token_manager.default' => 'getFosOauthServer_RefreshTokenManager_DefaultService',
            'fos_oauth_server.server' => 'getFosOauthServer_ServerService',
            'fos_oauth_server.storage' => 'getFosOauthServer_StorageService',
            'fos_rest.allowed_methods_listener' => 'getFosRest_AllowedMethodsListenerService',
            'fos_rest.allowed_methods_loader' => 'getFosRest_AllowedMethodsLoaderService',
            'fos_rest.body_listener' => 'getFosRest_BodyListenerService',
            'fos_rest.decoder.json' => 'getFosRest_Decoder_JsonService',
            'fos_rest.decoder.jsontoform' => 'getFosRest_Decoder_JsontoformService',
            'fos_rest.decoder.xml' => 'getFosRest_Decoder_XmlService',
            'fos_rest.decoder_provider' => 'getFosRest_DecoderProviderService',
            'fos_rest.format_listener' => 'getFosRest_FormatListenerService',
            'fos_rest.format_negotiator' => 'getFosRest_FormatNegotiatorService',
            'fos_rest.inflector.doctrine' => 'getFosRest_Inflector_DoctrineService',
            'fos_rest.mime_type_listener' => 'getFosRest_MimeTypeListenerService',
            'fos_rest.request.param_fetcher' => 'getFosRest_Request_ParamFetcherService',
            'fos_rest.request.param_fetcher.reader' => 'getFosRest_Request_ParamFetcher_ReaderService',
            'fos_rest.routing.loader.controller' => 'getFosRest_Routing_Loader_ControllerService',
            'fos_rest.routing.loader.processor' => 'getFosRest_Routing_Loader_ProcessorService',
            'fos_rest.routing.loader.reader.action' => 'getFosRest_Routing_Loader_Reader_ActionService',
            'fos_rest.routing.loader.reader.controller' => 'getFosRest_Routing_Loader_Reader_ControllerService',
            'fos_rest.routing.loader.xml_collection' => 'getFosRest_Routing_Loader_XmlCollectionService',
            'fos_rest.routing.loader.yaml_collection' => 'getFosRest_Routing_Loader_YamlCollectionService',
            'fos_rest.view_handler' => 'getFosRest_ViewHandlerService',
            'fos_rest.view_response_listener' => 'getFosRest_ViewResponseListenerService',
            'fragment.handler' => 'getFragment_HandlerService',
            'fragment.listener' => 'getFragment_ListenerService',
            'fragment.renderer.esi' => 'getFragment_Renderer_EsiService',
            'fragment.renderer.hinclude' => 'getFragment_Renderer_HincludeService',
            'fragment.renderer.inline' => 'getFragment_Renderer_InlineService',
            'http_kernel' => 'getHttpKernelService',
            'image' => 'getImageService',
            'image.rendition' => 'getImage_RenditionService',
            'image.search' => 'getImage_SearchService',
            'image.update_storage' => 'getImage_UpdateStorageService',
            'index_client.default' => 'getIndexClient_DefaultService',
            'indexer.article' => 'getIndexer_ArticleService',
            'indexer.comment' => 'getIndexer_CommentService',
            'indexer.user' => 'getIndexer_UserService',
            'jms_serializer' => 'getJmsSerializerService',
            'jms_serializer.array_collection_handler' => 'getJmsSerializer_ArrayCollectionHandlerService',
            'jms_serializer.constraint_violation_handler' => 'getJmsSerializer_ConstraintViolationHandlerService',
            'jms_serializer.datetime_handler' => 'getJmsSerializer_DatetimeHandlerService',
            'jms_serializer.doctrine_proxy_subscriber' => 'getJmsSerializer_DoctrineProxySubscriberService',
            'jms_serializer.form_error_handler' => 'getJmsSerializer_FormErrorHandlerService',
            'jms_serializer.handler_registry' => 'getJmsSerializer_HandlerRegistryService',
            'jms_serializer.json_deserialization_visitor' => 'getJmsSerializer_JsonDeserializationVisitorService',
            'jms_serializer.json_serialization_visitor' => 'getJmsSerializer_JsonSerializationVisitorService',
            'jms_serializer.metadata_driver' => 'getJmsSerializer_MetadataDriverService',
            'jms_serializer.metadata_factory' => 'getJmsSerializer_MetadataFactoryService',
            'jms_serializer.naming_strategy' => 'getJmsSerializer_NamingStrategyService',
            'jms_serializer.object_constructor' => 'getJmsSerializer_ObjectConstructorService',
            'jms_serializer.php_collection_handler' => 'getJmsSerializer_PhpCollectionHandlerService',
            'jms_serializer.templating.helper.serializer' => 'getJmsSerializer_Templating_Helper_SerializerService',
            'jms_serializer.unserialize_object_constructor' => 'getJmsSerializer_UnserializeObjectConstructorService',
            'jms_serializer.xml_deserialization_visitor' => 'getJmsSerializer_XmlDeserializationVisitorService',
            'jms_serializer.xml_serialization_visitor' => 'getJmsSerializer_XmlSerializationVisitorService',
            'jms_serializer.yaml_serialization_visitor' => 'getJmsSerializer_YamlSerializationVisitorService',
            'kernel' => 'getKernelService',
            'knp_menu.factory' => 'getKnpMenu_FactoryService',
            'knp_menu.listener.voters' => 'getKnpMenu_Listener_VotersService',
            'knp_menu.matcher' => 'getKnpMenu_MatcherService',
            'knp_menu.menu_provider' => 'getKnpMenu_MenuProviderService',
            'knp_menu.renderer.list' => 'getKnpMenu_Renderer_ListService',
            'knp_menu.renderer.twig' => 'getKnpMenu_Renderer_TwigService',
            'knp_menu.renderer_provider' => 'getKnpMenu_RendererProviderService',
            'knp_menu.voter.router' => 'getKnpMenu_Voter_RouterService',
            'knp_paginator' => 'getKnpPaginatorService',
            'knp_paginator.helper.processor' => 'getKnpPaginator_Helper_ProcessorService',
            'knp_paginator.subscriber.filtration' => 'getKnpPaginator_Subscriber_FiltrationService',
            'knp_paginator.subscriber.paginate' => 'getKnpPaginator_Subscriber_PaginateService',
            'knp_paginator.subscriber.sliding_pagination' => 'getKnpPaginator_Subscriber_SlidingPaginationService',
            'knp_paginator.subscriber.sortable' => 'getKnpPaginator_Subscriber_SortableService',
            'knp_paginator.templating.helper.pagination' => 'getKnpPaginator_Templating_Helper_PaginationService',
            'knp_paginator.twig.extension.pagination' => 'getKnpPaginator_Twig_Extension_PaginationService',
            'locale_listener' => 'getLocaleListenerService',
            'logger' => 'getLoggerService',
            'monolog.handler.main' => 'getMonolog_Handler_MainService',
            'monolog.handler.nested' => 'getMonolog_Handler_NestedService',
            'monolog.handler.sentry' => 'getMonolog_Handler_SentryService',
            'monolog.logger.assetic' => 'getMonolog_Logger_AsseticService',
            'monolog.logger.doctrine' => 'getMonolog_Logger_DoctrineService',
            'monolog.logger.emergency' => 'getMonolog_Logger_EmergencyService',
            'monolog.logger.request' => 'getMonolog_Logger_RequestService',
            'monolog.logger.router' => 'getMonolog_Logger_RouterService',
            'monolog.logger.security' => 'getMonolog_Logger_SecurityService',
            'monolog.logger.sentry' => 'getMonolog_Logger_SentryService',
            'nelmio_api_doc.doc_comment_extractor' => 'getNelmioApiDoc_DocCommentExtractorService',
            'nelmio_api_doc.extractor.api_doc_extractor' => 'getNelmioApiDoc_Extractor_ApiDocExtractorService',
            'nelmio_api_doc.form.extension.description_form_type_extension' => 'getNelmioApiDoc_Form_Extension_DescriptionFormTypeExtensionService',
            'nelmio_api_doc.formatter.html_formatter' => 'getNelmioApiDoc_Formatter_HtmlFormatterService',
            'nelmio_api_doc.formatter.markdown_formatter' => 'getNelmioApiDoc_Formatter_MarkdownFormatterService',
            'nelmio_api_doc.formatter.simple_formatter' => 'getNelmioApiDoc_Formatter_SimpleFormatterService',
            'nelmio_api_doc.formatter.swagger_formatter' => 'getNelmioApiDoc_Formatter_SwaggerFormatterService',
            'nelmio_api_doc.parser.collection_parser' => 'getNelmioApiDoc_Parser_CollectionParserService',
            'nelmio_api_doc.parser.form_errors_parser' => 'getNelmioApiDoc_Parser_FormErrorsParserService',
            'nelmio_api_doc.parser.form_type_parser' => 'getNelmioApiDoc_Parser_FormTypeParserService',
            'nelmio_api_doc.parser.jms_metadata_parser' => 'getNelmioApiDoc_Parser_JmsMetadataParserService',
            'nelmio_api_doc.parser.validation_parser' => 'getNelmioApiDoc_Parser_ValidationParserService',
            'nelmio_api_doc.twig.extension.extra_markdown' => 'getNelmioApiDoc_Twig_Extension_ExtraMarkdownService',
            'newscoop.cache' => 'getNewscoop_CacheService',
            'newscoop.criteria.communityticker' => 'getNewscoop_Criteria_CommunitytickerService',
            'newscoop.criteria.users' => 'getNewscoop_Criteria_UsersService',
            'newscoop.editor' => 'getNewscoop_EditorService',
            'newscoop.editorial_comments' => 'getNewscoop_EditorialCommentsService',
            'newscoop.filesystem' => 'getNewscoop_FilesystemService',
            'newscoop.gimme.authorize.form' => 'getNewscoop_Gimme_Authorize_FormService',
            'newscoop.gimme.authorize.form_handler' => 'getNewscoop_Gimme_Authorize_FormHandlerService',
            'newscoop.gimme.authorize.form_type' => 'getNewscoop_Gimme_Authorize_FormTypeService',
            'newscoop.gimme.listener.allow_origin' => 'getNewscoop_Gimme_Listener_AllowOriginService',
            'newscoop.gimme.listener.format_json' => 'getNewscoop_Gimme_Listener_FormatJsonService',
            'newscoop.gimme.listener.link_request' => 'getNewscoop_Gimme_Listener_LinkRequestService',
            'newscoop.gimme.listener.public_resources' => 'getNewscoop_Gimme_Listener_PublicResourcesService',
            'newscoop.gimme.oauth_event_listener' => 'getNewscoop_Gimme_OauthEventListenerService',
            'newscoop.gimme.serializer.article_author_handler' => 'getNewscoop_Gimme_Serializer_ArticleAuthorHandlerService',
            'newscoop.gimme.serializer.article_comments_count_handler' => 'getNewscoop_Gimme_Serializer_ArticleCommentsCountHandlerService',
            'newscoop.gimme.serializer.article_comments_link_handler' => 'getNewscoop_Gimme_Serializer_ArticleCommentsLinkHandlerService',
            'newscoop.gimme.serializer.article_fields_handler' => 'getNewscoop_Gimme_Serializer_ArticleFieldsHandlerService',
            'newscoop.gimme.serializer.article_recommended_comments_count_handler' => 'getNewscoop_Gimme_Serializer_ArticleRecommendedCommentsCountHandlerService',
            'newscoop.gimme.serializer.article_renditions_handler' => 'getNewscoop_Gimme_Serializer_ArticleRenditionsHandlerService',
            'newscoop.gimme.serializer.article_translations_handler' => 'getNewscoop_Gimme_Serializer_ArticleTranslationsHandlerService',
            'newscoop.gimme.serializer.article_url_handler' => 'getNewscoop_Gimme_Serializer_ArticleUrlHandlerService',
            'newscoop.gimme.serializer.image_image_uri_handler' => 'getNewscoop_Gimme_Serializer_ImageImageUriHandlerService',
            'newscoop.gimme.serializer.image_thumbnail_uri_handler' => 'getNewscoop_Gimme_Serializer_ImageThumbnailUriHandlerService',
            'newscoop.gimme.serializer.package_items_link_handler' => 'getNewscoop_Gimme_Serializer_PackageItemsLinkHandlerService',
            'newscoop.gimme.serializer.topic_path_handler' => 'getNewscoop_Gimme_Serializer_TopicPathHandlerService',
            'newscoop.input_manipulator' => 'getNewscoop_InputManipulatorService',
            'newscoop.listpaginator.service' => 'getNewscoop_Listpaginator_ServiceService',
            'newscoop.paginator.pagination_extra_data_subscriber' => 'getNewscoop_Paginator_PaginationExtraDataSubscriberService',
            'newscoop.paginator.pagination_listener' => 'getNewscoop_Paginator_PaginationListenerService',
            'newscoop.paginator.paginator_service' => 'getNewscoop_Paginator_PaginatorServiceService',
            'newscoop.paginator.query_subscriber' => 'getNewscoop_Paginator_QuerySubscriberService',
            'newscoop.placeholders.service' => 'getNewscoop_Placeholders_ServiceService',
            'newscoop.plugins.manager' => 'getNewscoop_Plugins_ManagerService',
            'newscoop.plugins.service' => 'getNewscoop_Plugins_ServiceService',
            'newscoop.scheduler' => 'getNewscoop_SchedulerService',
            'newscoop.serializer.serializer_subscriber' => 'getNewscoop_Serializer_SerializerSubscriberService',
            'newscoop.template_lists.communityticker' => 'getNewscoop_TemplateLists_CommunitytickerService',
            'newscoop.template_lists.users' => 'getNewscoop_TemplateLists_UsersService',
            'newscoop.templates.service' => 'getNewscoop_Templates_ServiceService',
            'newscoop.zendbridge.zendapplication_listener' => 'getNewscoop_Zendbridge_ZendapplicationListenerService',
            'newscoop_newscoop.article_service' => 'getNewscoopNewscoop_ArticleServiceService',
            'newscoop_newscoop.criteria.users' => 'getNewscoopNewscoop_Criteria_UsersService',
            'newscoop_newscoop.doctrine.event_dispatcher_proxy' => 'getNewscoopNewscoop_Doctrine_EventDispatcherProxyService',
            'newscoop_newscoop.issue_service' => 'getNewscoopNewscoop_IssueServiceService',
            'newscoop_newscoop.list_objects.listener' => 'getNewscoopNewscoop_ListObjects_ListenerService',
            'newscoop_newscoop.listener.access_denied' => 'getNewscoopNewscoop_Listener_AccessDeniedService',
            'newscoop_newscoop.listener.article' => 'getNewscoopNewscoop_Listener_ArticleService',
            'newscoop_newscoop.listener.issue' => 'getNewscoopNewscoop_Listener_IssueService',
            'newscoop_newscoop.listener.locale_listener' => 'getNewscoopNewscoop_Listener_LocaleListenerService',
            'newscoop_newscoop.listener.no_cache_listener' => 'getNewscoopNewscoop_Listener_NoCacheListenerService',
            'newscoop_newscoop.listener.publication' => 'getNewscoopNewscoop_Listener_PublicationService',
            'newscoop_newscoop.listener.route_listener' => 'getNewscoopNewscoop_Listener_RouteListenerService',
            'newscoop_newscoop.listener.userip' => 'getNewscoopNewscoop_Listener_UseripService',
            'newscoop_newscoop.menu.breadcrumb' => 'getNewscoopNewscoop_Menu_BreadcrumbService',
            'newscoop_newscoop.menu.main' => 'getNewscoopNewscoop_Menu_MainService',
            'newscoop_newscoop.menu.main_modern' => 'getNewscoopNewscoop_Menu_MainModernService',
            'newscoop_newscoop.menu_builder' => 'getNewscoopNewscoop_MenuBuilderService',
            'newscoop_newscoop.password_encoder' => 'getNewscoopNewscoop_PasswordEncoderService',
            'newscoop_newscoop.publication_service' => 'getNewscoopNewscoop_PublicationServiceService',
            'newscoop_newscoop.routing.loader.plugins' => 'getNewscoopNewscoop_Routing_Loader_PluginsService',
            'newscoop_newscoop.security.authentication.frontend.success_handler' => 'getNewscoopNewscoop_Security_Authentication_Frontend_SuccessHandlerService',
            'newscoop_newscoop.security.oauth.logout.success_handler' => 'getNewscoopNewscoop_Security_Oauth_Logout_SuccessHandlerService',
            'newscoop_newscoop.session.storage' => 'getNewscoopNewscoop_Session_StorageService',
            'newscoop_newscoop.simple_user_provider' => 'getNewscoopNewscoop_SimpleUserProviderService',
            'newscoop_newscoop.template_lists.users' => 'getNewscoopNewscoop_TemplateLists_UsersService',
            'newscoop_newscoop.themes_service' => 'getNewscoopNewscoop_ThemesServiceService',
            'newscoop_newscoop.topic_service' => 'getNewscoopNewscoop_TopicServiceService',
            'newscoop_newscoop.translation_listener' => 'getNewscoopNewscoop_TranslationListenerService',
            'newscoop_newscoop.twig.include_as_verbatim_extension' => 'getNewscoopNewscoop_Twig_IncludeAsVerbatimExtensionService',
            'newscoop_newscoop.twig.newscoop_extension' => 'getNewscoopNewscoop_Twig_NewscoopExtensionService',
            'newscoop_ticker_plugin.lifecyclesubscriber' => 'getNewscoopTickerPlugin_LifecyclesubscriberService',
            'newscoop_ticker_plugin.list_objects.listener' => 'getNewscoopTickerPlugin_ListObjects_ListenerService',
            'newscoop_ticker_plugin.service' => 'getNewscoopTickerPlugin_ServiceService',
            'notification' => 'getNotificationService',
            'package' => 'getPackageService',
            'package.search' => 'getPackage_SearchService',
            'playlists' => 'getPlaylistsService',
            'preferences' => 'getPreferencesService',
            'property_accessor' => 'getPropertyAccessorService',
            'random' => 'getRandomService',
            'related_articles' => 'getRelatedArticlesService',
            'request' => 'getRequestService',
            'request_stack' => 'getRequestStackService',
            'response_listener' => 'getResponseListenerService',
            'router' => 'getRouterService',
            'router.request_context' => 'getRouter_RequestContextService',
            'router_listener' => 'getRouterListenerService',
            'routing.loader' => 'getRouting_LoaderService',
            'search.article' => 'getSearch_ArticleService',
            'search.comment' => 'getSearch_CommentService',
            'search.user' => 'getSearch_UserService',
            'security.access.decision_manager' => 'getSecurity_Access_DecisionManagerService',
            'security.access_listener' => 'getSecurity_AccessListenerService',
            'security.access_map' => 'getSecurity_AccessMapService',
            'security.authentication.manager' => 'getSecurity_Authentication_ManagerService',
            'security.authentication.session_strategy' => 'getSecurity_Authentication_SessionStrategyService',
            'security.authentication.trust_resolver' => 'getSecurity_Authentication_TrustResolverService',
            'security.channel_listener' => 'getSecurity_ChannelListenerService',
            'security.context' => 'getSecurity_ContextService',
            'security.csrf.token_manager' => 'getSecurity_Csrf_TokenManagerService',
            'security.encoder_factory' => 'getSecurity_EncoderFactoryService',
            'security.firewall' => 'getSecurity_FirewallService',
            'security.firewall.map.context.admin_area' => 'getSecurity_Firewall_Map_Context_AdminAreaService',
            'security.firewall.map.context.api' => 'getSecurity_Firewall_Map_Context_ApiService',
            'security.firewall.map.context.dev' => 'getSecurity_Firewall_Map_Context_DevService',
            'security.firewall.map.context.frontend_area' => 'getSecurity_Firewall_Map_Context_FrontendAreaService',
            'security.firewall.map.context.login' => 'getSecurity_Firewall_Map_Context_LoginService',
            'security.firewall.map.context.oauth_authorize' => 'getSecurity_Firewall_Map_Context_OauthAuthorizeService',
            'security.firewall.map.context.oauth_token' => 'getSecurity_Firewall_Map_Context_OauthTokenService',
            'security.firewall.map.context.password_check_token' => 'getSecurity_Firewall_Map_Context_PasswordCheckTokenService',
            'security.firewall.map.context.password_recovery' => 'getSecurity_Firewall_Map_Context_PasswordRecoveryService',
            'security.http_utils' => 'getSecurity_HttpUtilsService',
            'security.rememberme.response_listener' => 'getSecurity_Rememberme_ResponseListenerService',
            'security.role_hierarchy' => 'getSecurity_RoleHierarchyService',
            'security.secure_random' => 'getSecurity_SecureRandomService',
            'security.user.provider.concrete.backend_db' => 'getSecurity_User_Provider_Concrete_BackendDbService',
            'security.user.provider.concrete.chain_provider' => 'getSecurity_User_Provider_Concrete_ChainProviderService',
            'security.user.provider.concrete.frontend_db' => 'getSecurity_User_Provider_Concrete_FrontendDbService',
            'security.validator.user_password' => 'getSecurity_Validator_UserPasswordService',
            'sensio_framework_extra.cache.listener' => 'getSensioFrameworkExtra_Cache_ListenerService',
            'sensio_framework_extra.controller.listener' => 'getSensioFrameworkExtra_Controller_ListenerService',
            'sensio_framework_extra.converter.datetime' => 'getSensioFrameworkExtra_Converter_DatetimeService',
            'sensio_framework_extra.converter.doctrine.orm' => 'getSensioFrameworkExtra_Converter_Doctrine_OrmService',
            'sensio_framework_extra.converter.listener' => 'getSensioFrameworkExtra_Converter_ListenerService',
            'sensio_framework_extra.converter.manager' => 'getSensioFrameworkExtra_Converter_ManagerService',
            'sensio_framework_extra.security.listener' => 'getSensioFrameworkExtra_Security_ListenerService',
            'sensio_framework_extra.view.guesser' => 'getSensioFrameworkExtra_View_GuesserService',
            'service_container' => 'getServiceContainerService',
            'session' => 'getSessionService',
            'session.save_listener' => 'getSession_SaveListenerService',
            'session.storage.filesystem' => 'getSession_Storage_FilesystemService',
            'session.storage.metadata_bag' => 'getSession_Storage_MetadataBagService',
            'session.storage.native' => 'getSession_Storage_NativeService',
            'session.storage.php_bridge' => 'getSession_Storage_PhpBridgeService',
            'session_listener' => 'getSessionListenerService',
            'stat' => 'getStatService',
            'stof_doctrine_extensions.event_listener.locale' => 'getStofDoctrineExtensions_EventListener_LocaleService',
            'stof_doctrine_extensions.listener.translatable' => 'getStofDoctrineExtensions_Listener_TranslatableService',
            'stof_doctrine_extensions.uploadable.manager' => 'getStofDoctrineExtensions_Uploadable_ManagerService',
            'storage' => 'getStorageService',
            'storage.adapter' => 'getStorage_AdapterService',
            'streamed_response_listener' => 'getStreamedResponseListenerService',
            'subscription' => 'getSubscriptionService',
            'subscription.ip' => 'getSubscription_IpService',
            'subscription.section' => 'getSubscription_SectionService',
            'subscription.service' => 'getSubscription_ServiceService',
            'swiftmailer.email_sender.listener' => 'getSwiftmailer_EmailSender_ListenerService',
            'swiftmailer.mailer.default' => 'getSwiftmailer_Mailer_DefaultService',
            'swiftmailer.mailer.default.transport' => 'getSwiftmailer_Mailer_Default_TransportService',
            'templating' => 'getTemplatingService',
            'templating.asset.package_factory' => 'getTemplating_Asset_PackageFactoryService',
            'templating.engine.php' => 'getTemplating_Engine_PhpService',
            'templating.filename_parser' => 'getTemplating_FilenameParserService',
            'templating.globals' => 'getTemplating_GlobalsService',
            'templating.helper.actions' => 'getTemplating_Helper_ActionsService',
            'templating.helper.assets' => 'getTemplating_Helper_AssetsService',
            'templating.helper.code' => 'getTemplating_Helper_CodeService',
            'templating.helper.form' => 'getTemplating_Helper_FormService',
            'templating.helper.logout_url' => 'getTemplating_Helper_LogoutUrlService',
            'templating.helper.request' => 'getTemplating_Helper_RequestService',
            'templating.helper.router' => 'getTemplating_Helper_RouterService',
            'templating.helper.security' => 'getTemplating_Helper_SecurityService',
            'templating.helper.session' => 'getTemplating_Helper_SessionService',
            'templating.helper.slots' => 'getTemplating_Helper_SlotsService',
            'templating.helper.stopwatch' => 'getTemplating_Helper_StopwatchService',
            'templating.helper.translator' => 'getTemplating_Helper_TranslatorService',
            'templating.loader' => 'getTemplating_LoaderService',
            'templating.locator' => 'getTemplating_LocatorService',
            'templating.name_parser' => 'getTemplating_NameParserService',
            'translation.dumper.csv' => 'getTranslation_Dumper_CsvService',
            'translation.dumper.ini' => 'getTranslation_Dumper_IniService',
            'translation.dumper.json' => 'getTranslation_Dumper_JsonService',
            'translation.dumper.mo' => 'getTranslation_Dumper_MoService',
            'translation.dumper.php' => 'getTranslation_Dumper_PhpService',
            'translation.dumper.po' => 'getTranslation_Dumper_PoService',
            'translation.dumper.qt' => 'getTranslation_Dumper_QtService',
            'translation.dumper.res' => 'getTranslation_Dumper_ResService',
            'translation.dumper.xliff' => 'getTranslation_Dumper_XliffService',
            'translation.dumper.yml' => 'getTranslation_Dumper_YmlService',
            'translation.extractor' => 'getTranslation_ExtractorService',
            'translation.extractor.php' => 'getTranslation_Extractor_PhpService',
            'translation.loader' => 'getTranslation_LoaderService',
            'translation.loader.csv' => 'getTranslation_Loader_CsvService',
            'translation.loader.dat' => 'getTranslation_Loader_DatService',
            'translation.loader.ini' => 'getTranslation_Loader_IniService',
            'translation.loader.json' => 'getTranslation_Loader_JsonService',
            'translation.loader.mo' => 'getTranslation_Loader_MoService',
            'translation.loader.php' => 'getTranslation_Loader_PhpService',
            'translation.loader.po' => 'getTranslation_Loader_PoService',
            'translation.loader.qt' => 'getTranslation_Loader_QtService',
            'translation.loader.res' => 'getTranslation_Loader_ResService',
            'translation.loader.xliff' => 'getTranslation_Loader_XliffService',
            'translation.loader.yml' => 'getTranslation_Loader_YmlService',
            'translation.writer' => 'getTranslation_WriterService',
            'translator.default' => 'getTranslator_DefaultService',
            'twig' => 'getTwigService',
            'twig.controller.exception' => 'getTwig_Controller_ExceptionService',
            'twig.exception_listener' => 'getTwig_ExceptionListenerService',
            'twig.loader' => 'getTwig_LoaderService',
            'twig.translation.extractor' => 'getTwig_Translation_ExtractorService',
            'uri_signer' => 'getUriSignerService',
            'user' => 'getUserService',
            'user.garbage' => 'getUser_GarbageService',
            'user.list' => 'getUser_ListService',
            'user.manager' => 'getUser_ManagerService',
            'user.repository' => 'getUser_RepositoryService',
            'user.search' => 'getUser_SearchService',
            'user.token' => 'getUser_TokenService',
            'user.topic' => 'getUser_TopicService',
            'user_attributes' => 'getUserAttributesService',
            'user_points' => 'getUserPointsService',
            'user_type' => 'getUserTypeService',
            'validator' => 'getValidatorService',
            'validator.builder' => 'getValidator_BuilderService',
            'validator.email' => 'getValidator_EmailService',
            'validator.expression' => 'getValidator_ExpressionService',
            'view' => 'getViewService',
            'view.helper.rendition' => 'getView_Helper_RenditionService',
            'view.helper.thumbnail' => 'getView_Helper_ThumbnailService',
            'webcode' => 'getWebcodeService',
            'zend_auth' => 'getZendAuthService',
            'zend_router' => 'getZendRouterService',
        );
        $this->aliases = array(
            'database_connection' => 'doctrine.dbal.default_connection',
            'dispatcher' => 'event_dispatcher',
            'doctrine.em' => 'doctrine.orm.default_entity_manager',
            'doctrine.orm.entity_manager' => 'doctrine.orm.default_entity_manager',
            'em' => 'doctrine.orm.default_entity_manager',
            'fos_oauth_server.access_token_manager' => 'fos_oauth_server.access_token_manager.default',
            'fos_oauth_server.auth_code_manager' => 'fos_oauth_server.auth_code_manager.default',
            'fos_oauth_server.authorize.form.handler' => 'fos_oauth_server.authorize.form.handler.default',
            'fos_oauth_server.client_manager' => 'fos_oauth_server.client_manager.default',
            'fos_oauth_server.refresh_token_manager' => 'fos_oauth_server.refresh_token_manager.default',
            'fos_rest.inflector' => 'fos_rest.inflector.doctrine',
            'fos_rest.router' => 'router',
            'fos_rest.serializer' => 'jms_serializer',
            'fos_rest.templating' => 'templating',
            'mailer' => 'swiftmailer.mailer.default',
            'newscoop.publication_service' => 'newscoop_newscoop.publication_service',
            'serializer' => 'jms_serializer',
            'session.storage' => 'newscoop_newscoop.session.storage',
            'swiftmailer.mailer' => 'swiftmailer.mailer.default',
            'swiftmailer.transport' => 'swiftmailer.mailer.default.transport',
            'system_preferences_service' => 'preferences',
            'topic' => 'newscoop_newscoop.topic_service',
            'translator' => 'translator.default',
        );
    }
    protected function getAnnotationReaderService()
    {
        return $this->services['annotation_reader'] = new \Doctrine\Common\Annotations\FileCacheReader(new \Doctrine\Common\Annotations\AnnotationReader(), (__DIR__.'/annotations'), false);
    }
    protected function getArticle_LinkService()
    {
        return $this->services['article.link'] = new \Newscoop\Article\LinkService($this->get('doctrine.orm.default_entity_manager'), $this->get('zend_router'), $this->get('router'));
    }
    protected function getArticle_RepositoryService()
    {
        return $this->services['article.repository'] = $this->get('doctrine')->getRepository('\\Newscoop\\Entity\\Article');
    }
    protected function getArticles_Hooks_ListenerService()
    {
        return $this->services['articles.hooks.listener'] = new \Newscoop\ArticlesBundle\EventListener\HookListener($this->get('doctrine.orm.default_entity_manager'), $this->get('templating'), $this->get('fos_oauth_server.client_manager.default'), $this->get('preferences'), $this->get('newscoop_newscoop.publication_service'));
    }
    protected function getAssetic_AssetManagerService()
    {
        $a = $this->get('assetic.asset_factory');
        $b = $this->get('templating.loader');
        $c = new \Assetic\Cache\ConfigCache((__DIR__.'/assetic/config'));
        $this->services['assetic.asset_manager'] = $instance = new \Assetic\Factory\LazyAssetManager($a, array('twig' => new \Assetic\Factory\Loader\CachedFormulaLoader(new \Assetic\Extension\Twig\TwigFormulaLoader($this->get('twig'), $this->get('monolog.logger.assetic', ContainerInterface::NULL_ON_INVALID_REFERENCE)), $c, false), 'php' => new \Assetic\Factory\Loader\CachedFormulaLoader(new \Symfony\Bundle\AsseticBundle\Factory\Loader\AsseticHelperFormulaLoader($a), $c, false)));
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'FrameworkBundle', ($this->targetDirs[2].'/application/Resources/FrameworkBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'FrameworkBundle', ($this->targetDirs[2].'/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'FrameworkBundle', ($this->targetDirs[2].'/application/Resources/FrameworkBundle/views'), '/\\.[^.]+\\.php$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'FrameworkBundle', ($this->targetDirs[2].'/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views'), '/\\.[^.]+\\.php$/'))), 'php');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'SecurityBundle', ($this->targetDirs[2].'/application/Resources/SecurityBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'SecurityBundle', ($this->targetDirs[2].'/vendor/symfony/symfony/src/Symfony/Bundle/SecurityBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'SecurityBundle', ($this->targetDirs[2].'/application/Resources/SecurityBundle/views'), '/\\.[^.]+\\.php$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'SecurityBundle', ($this->targetDirs[2].'/vendor/symfony/symfony/src/Symfony/Bundle/SecurityBundle/Resources/views'), '/\\.[^.]+\\.php$/'))), 'php');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'TwigBundle', ($this->targetDirs[2].'/application/Resources/TwigBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'TwigBundle', ($this->targetDirs[2].'/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'TwigBundle', ($this->targetDirs[2].'/application/Resources/TwigBundle/views'), '/\\.[^.]+\\.php$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'TwigBundle', ($this->targetDirs[2].'/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views'), '/\\.[^.]+\\.php$/'))), 'php');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'MonologBundle', ($this->targetDirs[2].'/application/Resources/MonologBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'MonologBundle', ($this->targetDirs[2].'/vendor/symfony/monolog-bundle/Symfony/Bundle/MonologBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'MonologBundle', ($this->targetDirs[2].'/application/Resources/MonologBundle/views'), '/\\.[^.]+\\.php$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'MonologBundle', ($this->targetDirs[2].'/vendor/symfony/monolog-bundle/Symfony/Bundle/MonologBundle/Resources/views'), '/\\.[^.]+\\.php$/'))), 'php');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'SwiftmailerBundle', ($this->targetDirs[2].'/application/Resources/SwiftmailerBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'SwiftmailerBundle', ($this->targetDirs[2].'/vendor/symfony/swiftmailer-bundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'SwiftmailerBundle', ($this->targetDirs[2].'/application/Resources/SwiftmailerBundle/views'), '/\\.[^.]+\\.php$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'SwiftmailerBundle', ($this->targetDirs[2].'/vendor/symfony/swiftmailer-bundle/Resources/views'), '/\\.[^.]+\\.php$/'))), 'php');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'AsseticBundle', ($this->targetDirs[2].'/application/Resources/AsseticBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'AsseticBundle', ($this->targetDirs[2].'/vendor/symfony/assetic-bundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'AsseticBundle', ($this->targetDirs[2].'/application/Resources/AsseticBundle/views'), '/\\.[^.]+\\.php$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'AsseticBundle', ($this->targetDirs[2].'/vendor/symfony/assetic-bundle/Resources/views'), '/\\.[^.]+\\.php$/'))), 'php');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'DoctrineBundle', ($this->targetDirs[2].'/application/Resources/DoctrineBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'DoctrineBundle', ($this->targetDirs[2].'/vendor/doctrine/doctrine-bundle/Doctrine/Bundle/DoctrineBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'DoctrineBundle', ($this->targetDirs[2].'/application/Resources/DoctrineBundle/views'), '/\\.[^.]+\\.php$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'DoctrineBundle', ($this->targetDirs[2].'/vendor/doctrine/doctrine-bundle/Doctrine/Bundle/DoctrineBundle/Resources/views'), '/\\.[^.]+\\.php$/'))), 'php');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'SensioFrameworkExtraBundle', ($this->targetDirs[2].'/application/Resources/SensioFrameworkExtraBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'SensioFrameworkExtraBundle', ($this->targetDirs[2].'/vendor/sensio/framework-extra-bundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'SensioFrameworkExtraBundle', ($this->targetDirs[2].'/application/Resources/SensioFrameworkExtraBundle/views'), '/\\.[^.]+\\.php$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'SensioFrameworkExtraBundle', ($this->targetDirs[2].'/vendor/sensio/framework-extra-bundle/Resources/views'), '/\\.[^.]+\\.php$/'))), 'php');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'JMSSerializerBundle', ($this->targetDirs[2].'/application/Resources/JMSSerializerBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'JMSSerializerBundle', ($this->targetDirs[2].'/vendor/jms/serializer-bundle/JMS/SerializerBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'JMSSerializerBundle', ($this->targetDirs[2].'/application/Resources/JMSSerializerBundle/views'), '/\\.[^.]+\\.php$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'JMSSerializerBundle', ($this->targetDirs[2].'/vendor/jms/serializer-bundle/JMS/SerializerBundle/Resources/views'), '/\\.[^.]+\\.php$/'))), 'php');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'FOSRestBundle', ($this->targetDirs[2].'/application/Resources/FOSRestBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'FOSRestBundle', ($this->targetDirs[2].'/vendor/friendsofsymfony/rest-bundle/FOS/RestBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'FOSRestBundle', ($this->targetDirs[2].'/application/Resources/FOSRestBundle/views'), '/\\.[^.]+\\.php$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'FOSRestBundle', ($this->targetDirs[2].'/vendor/friendsofsymfony/rest-bundle/FOS/RestBundle/Resources/views'), '/\\.[^.]+\\.php$/'))), 'php');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'NewscoopGimmeBundle', ($this->targetDirs[2].'/application/Resources/NewscoopGimmeBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'NewscoopGimmeBundle', ($this->targetDirs[2].'/src/Newscoop/GimmeBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'NewscoopGimmeBundle', ($this->targetDirs[2].'/application/Resources/NewscoopGimmeBundle/views'), '/\\.[^.]+\\.php$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'NewscoopGimmeBundle', ($this->targetDirs[2].'/src/Newscoop/GimmeBundle/Resources/views'), '/\\.[^.]+\\.php$/'))), 'php');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'KnpPaginatorBundle', ($this->targetDirs[2].'/application/Resources/KnpPaginatorBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'KnpPaginatorBundle', ($this->targetDirs[2].'/vendor/knplabs/knp-paginator-bundle/Knp/Bundle/PaginatorBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'KnpPaginatorBundle', ($this->targetDirs[2].'/application/Resources/KnpPaginatorBundle/views'), '/\\.[^.]+\\.php$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'KnpPaginatorBundle', ($this->targetDirs[2].'/vendor/knplabs/knp-paginator-bundle/Knp/Bundle/PaginatorBundle/Resources/views'), '/\\.[^.]+\\.php$/'))), 'php');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'KnpMenuBundle', ($this->targetDirs[2].'/application/Resources/KnpMenuBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'KnpMenuBundle', ($this->targetDirs[2].'/vendor/knplabs/knp-menu-bundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'KnpMenuBundle', ($this->targetDirs[2].'/application/Resources/KnpMenuBundle/views'), '/\\.[^.]+\\.php$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'KnpMenuBundle', ($this->targetDirs[2].'/vendor/knplabs/knp-menu-bundle/Resources/views'), '/\\.[^.]+\\.php$/'))), 'php');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'EWZRecaptchaBundle', ($this->targetDirs[2].'/application/Resources/EWZRecaptchaBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'EWZRecaptchaBundle', ($this->targetDirs[2].'/vendor/newscoop/recaptcha-bundle/EWZ/Bundle/RecaptchaBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'EWZRecaptchaBundle', ($this->targetDirs[2].'/application/Resources/EWZRecaptchaBundle/views'), '/\\.[^.]+\\.php$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'EWZRecaptchaBundle', ($this->targetDirs[2].'/vendor/newscoop/recaptcha-bundle/EWZ/Bundle/RecaptchaBundle/Resources/views'), '/\\.[^.]+\\.php$/'))), 'php');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'FOSJsRoutingBundle', ($this->targetDirs[2].'/application/Resources/FOSJsRoutingBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'FOSJsRoutingBundle', ($this->targetDirs[2].'/vendor/friendsofsymfony/jsrouting-bundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'FOSJsRoutingBundle', ($this->targetDirs[2].'/application/Resources/FOSJsRoutingBundle/views'), '/\\.[^.]+\\.php$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'FOSJsRoutingBundle', ($this->targetDirs[2].'/vendor/friendsofsymfony/jsrouting-bundle/Resources/views'), '/\\.[^.]+\\.php$/'))), 'php');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'BazingaJsTranslationBundle', ($this->targetDirs[2].'/application/Resources/BazingaJsTranslationBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'BazingaJsTranslationBundle', ($this->targetDirs[2].'/vendor/willdurand/js-translation-bundle/Bazinga/Bundle/JsTranslationBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'BazingaJsTranslationBundle', ($this->targetDirs[2].'/application/Resources/BazingaJsTranslationBundle/views'), '/\\.[^.]+\\.php$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'BazingaJsTranslationBundle', ($this->targetDirs[2].'/vendor/willdurand/js-translation-bundle/Bazinga/Bundle/JsTranslationBundle/Resources/views'), '/\\.[^.]+\\.php$/'))), 'php');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'FOSOAuthServerBundle', ($this->targetDirs[2].'/application/Resources/FOSOAuthServerBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'FOSOAuthServerBundle', ($this->targetDirs[2].'/vendor/friendsofsymfony/oauth-server-bundle/FOS/OAuthServerBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'FOSOAuthServerBundle', ($this->targetDirs[2].'/application/Resources/FOSOAuthServerBundle/views'), '/\\.[^.]+\\.php$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'FOSOAuthServerBundle', ($this->targetDirs[2].'/vendor/friendsofsymfony/oauth-server-bundle/FOS/OAuthServerBundle/Resources/views'), '/\\.[^.]+\\.php$/'))), 'php');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'NelmioApiDocBundle', ($this->targetDirs[2].'/application/Resources/NelmioApiDocBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'NelmioApiDocBundle', ($this->targetDirs[2].'/vendor/nelmio/api-doc-bundle/Nelmio/ApiDocBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'NelmioApiDocBundle', ($this->targetDirs[2].'/application/Resources/NelmioApiDocBundle/views'), '/\\.[^.]+\\.php$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'NelmioApiDocBundle', ($this->targetDirs[2].'/vendor/nelmio/api-doc-bundle/Nelmio/ApiDocBundle/Resources/views'), '/\\.[^.]+\\.php$/'))), 'php');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'NewscoopZendBridgeBundle', ($this->targetDirs[2].'/application/Resources/NewscoopZendBridgeBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'NewscoopZendBridgeBundle', ($this->targetDirs[2].'/src/Newscoop/ZendBridgeBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'NewscoopZendBridgeBundle', ($this->targetDirs[2].'/application/Resources/NewscoopZendBridgeBundle/views'), '/\\.[^.]+\\.php$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'NewscoopZendBridgeBundle', ($this->targetDirs[2].'/src/Newscoop/ZendBridgeBundle/Resources/views'), '/\\.[^.]+\\.php$/'))), 'php');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'NewscoopNewscoopBundle', ($this->targetDirs[2].'/application/Resources/NewscoopNewscoopBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'NewscoopNewscoopBundle', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'NewscoopNewscoopBundle', ($this->targetDirs[2].'/application/Resources/NewscoopNewscoopBundle/views'), '/\\.[^.]+\\.php$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'NewscoopNewscoopBundle', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/views'), '/\\.[^.]+\\.php$/'))), 'php');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'NewscoopCommunityTickerBundle', ($this->targetDirs[2].'/application/Resources/NewscoopCommunityTickerBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'NewscoopCommunityTickerBundle', ($this->targetDirs[2].'/src/Newscoop/CommunityTickerBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'NewscoopCommunityTickerBundle', ($this->targetDirs[2].'/application/Resources/NewscoopCommunityTickerBundle/views'), '/\\.[^.]+\\.php$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'NewscoopCommunityTickerBundle', ($this->targetDirs[2].'/src/Newscoop/CommunityTickerBundle/Resources/views'), '/\\.[^.]+\\.php$/'))), 'php');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'NewscoopArticlesBundle', ($this->targetDirs[2].'/application/Resources/NewscoopArticlesBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'NewscoopArticlesBundle', ($this->targetDirs[2].'/src/Newscoop/ArticlesBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'NewscoopArticlesBundle', ($this->targetDirs[2].'/application/Resources/NewscoopArticlesBundle/views'), '/\\.[^.]+\\.php$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'NewscoopArticlesBundle', ($this->targetDirs[2].'/src/Newscoop/ArticlesBundle/Resources/views'), '/\\.[^.]+\\.php$/'))), 'php');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'StofDoctrineExtensionsBundle', ($this->targetDirs[2].'/application/Resources/StofDoctrineExtensionsBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'StofDoctrineExtensionsBundle', ($this->targetDirs[2].'/vendor/stof/doctrine-extensions-bundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'StofDoctrineExtensionsBundle', ($this->targetDirs[2].'/application/Resources/StofDoctrineExtensionsBundle/views'), '/\\.[^.]+\\.php$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'StofDoctrineExtensionsBundle', ($this->targetDirs[2].'/vendor/stof/doctrine-extensions-bundle/Resources/views'), '/\\.[^.]+\\.php$/'))), 'php');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'SensioGeneratorBundle', ($this->targetDirs[2].'/application/Resources/SensioGeneratorBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'SensioGeneratorBundle', ($this->targetDirs[2].'/vendor/sensio/generator-bundle/Sensio/Bundle/GeneratorBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'SensioGeneratorBundle', ($this->targetDirs[2].'/application/Resources/SensioGeneratorBundle/views'), '/\\.[^.]+\\.php$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'SensioGeneratorBundle', ($this->targetDirs[2].'/vendor/sensio/generator-bundle/Sensio/Bundle/GeneratorBundle/Resources/views'), '/\\.[^.]+\\.php$/'))), 'php');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'NewscoopPluginGeneratorBundle', ($this->targetDirs[2].'/application/Resources/NewscoopPluginGeneratorBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'NewscoopPluginGeneratorBundle', ($this->targetDirs[2].'/src/Newscoop/PluginGeneratorBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'NewscoopPluginGeneratorBundle', ($this->targetDirs[2].'/application/Resources/NewscoopPluginGeneratorBundle/views'), '/\\.[^.]+\\.php$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'NewscoopPluginGeneratorBundle', ($this->targetDirs[2].'/src/Newscoop/PluginGeneratorBundle/Resources/views'), '/\\.[^.]+\\.php$/'))), 'php');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, '', ($this->targetDirs[2].'/application/Resources/views'), '/\\.[^.]+\\.twig$/'), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, '', ($this->targetDirs[2].'/application/Resources/views'), '/\\.[^.]+\\.php$/'), 'php');
        return $instance;
    }
    protected function getAssetic_Filter_CssrewriteService()
    {
        return $this->services['assetic.filter.cssrewrite'] = new \Assetic\Filter\CssRewriteFilter();
    }
    protected function getAssetic_FilterManagerService()
    {
        return $this->services['assetic.filter_manager'] = new \Symfony\Bundle\AsseticBundle\FilterManager($this, array('cssrewrite' => 'assetic.filter.cssrewrite'));
    }
    protected function getAssetic_Helper_StaticService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('assetic.helper.static', 'request');
        }
        return $this->services['assetic.helper.static'] = $this->scopedServices['request']['assetic.helper.static'] = new \Symfony\Bundle\AsseticBundle\Templating\StaticAsseticHelper($this->get('templating.helper.assets'), $this->get('assetic.asset_factory'));
    }
    protected function getAttachmentService()
    {
        return $this->services['attachment'] = new \Newscoop\Services\AttachmentService(array('file_base_url' => 'files/', 'file_directory' => ($this->targetDirs[2].'/application/../public/files/'), 'file_num_dirs_level_1' => 1000, 'file_num_dirs_level_2' => 1000), $this->get('doctrine.orm.default_entity_manager'), $this->get('router'), $this->get('user'));
    }
    protected function getAuditService()
    {
        return $this->services['audit'] = new \Newscoop\Services\AuditService($this->get('doctrine.orm.default_entity_manager'), $this->get('user'));
    }
    protected function getAudit_MaintenanceService()
    {
        return $this->services['audit.maintenance'] = new \Newscoop\Services\AuditMaintenanceService($this->get('doctrine.orm.default_entity_manager'));
    }
    protected function getAuth_AdapterService()
    {
        return $this->services['auth.adapter'] = new \Newscoop\Services\Auth\DoctrineAuthService($this->get('doctrine.orm.default_entity_manager'));
    }
    protected function getAuth_Adapter_SocialService()
    {
        return $this->services['auth.adapter.social'] = new \Newscoop\Services\Auth\SocialAuthService($this->get('doctrine.orm.default_entity_manager'));
    }
    protected function getAuthorService()
    {
        return $this->services['author'] = new \Newscoop\Services\AuthorService($this->get('doctrine.orm.default_entity_manager'));
    }
    protected function getBazinga_Jstranslation_ControllerService()
    {
        $a = $this->get('translation.loader.xliff');
        $this->services['bazinga.jstranslation.controller'] = $instance = new \Bazinga\Bundle\JsTranslationBundle\Controller\Controller($this->get('translator.default'), $this->get('templating'), $this->get('bazinga.jstranslation.translation_finder'), (__DIR__.'/bazinga-js-translation'), false, 'en', 'messages', '86400');
        $instance->addLoader('php', $this->get('translation.loader.php'));
        $instance->addLoader('yml', $this->get('translation.loader.yml'));
        $instance->addLoader('xlf', $a);
        $instance->addLoader('xliff', $a);
        $instance->addLoader('po', $this->get('translation.loader.po'));
        $instance->addLoader('mo', $this->get('translation.loader.mo'));
        $instance->addLoader('ts', $this->get('translation.loader.qt'));
        $instance->addLoader('csv', $this->get('translation.loader.csv'));
        $instance->addLoader('res', $this->get('translation.loader.res'));
        $instance->addLoader('dat', $this->get('translation.loader.dat'));
        $instance->addLoader('ini', $this->get('translation.loader.ini'));
        $instance->addLoader('json', $this->get('translation.loader.json'));
        return $instance;
    }
    protected function getBazinga_Jstranslation_TranslationDumperService()
    {
        $a = $this->get('translation.loader.xliff');
        $this->services['bazinga.jstranslation.translation_dumper'] = $instance = new \Bazinga\Bundle\JsTranslationBundle\Dumper\TranslationDumper($this->get('templating'), $this->get('bazinga.jstranslation.translation_finder'), $this->get('router'), $this->get('filesystem'), 'en', 'messages', array(), array());
        $instance->addLoader('php', $this->get('translation.loader.php'));
        $instance->addLoader('yml', $this->get('translation.loader.yml'));
        $instance->addLoader('xlf', $a);
        $instance->addLoader('xliff', $a);
        $instance->addLoader('po', $this->get('translation.loader.po'));
        $instance->addLoader('mo', $this->get('translation.loader.mo'));
        $instance->addLoader('ts', $this->get('translation.loader.qt'));
        $instance->addLoader('csv', $this->get('translation.loader.csv'));
        $instance->addLoader('res', $this->get('translation.loader.res'));
        $instance->addLoader('dat', $this->get('translation.loader.dat'));
        $instance->addLoader('ini', $this->get('translation.loader.ini'));
        $instance->addLoader('json', $this->get('translation.loader.json'));
        return $instance;
    }
    protected function getBazinga_Jstranslation_TranslationFinderService()
    {
        return $this->services['bazinga.jstranslation.translation_finder'] = new \Bazinga\Bundle\JsTranslationBundle\Finder\TranslationFinder($this->get('kernel'));
    }
    protected function getBlogService()
    {
        return $this->services['blog'] = new \Newscoop\Services\BlogService(array('role' => '6', 'publication' => '5', 'issue' => '3', 'type' => 'bloginfo', 'article_type' => 'blog'), $this->get('doctrine.orm.default_entity_manager'));
    }
    protected function getCacheClearerService()
    {
        return $this->services['cache_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer(array());
    }
    protected function getCacheWarmerService()
    {
        $a = $this->get('kernel');
        $b = $this->get('templating.filename_parser');
        $c = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TemplateFinder($a, $b, ($this->targetDirs[2].'/application/Resources'));
        return $this->services['cache_warmer'] = new \Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate(array(0 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TemplatePathsCacheWarmer($c, $this->get('templating.locator')), 1 => new \Symfony\Bundle\AsseticBundle\CacheWarmer\AssetManagerCacheWarmer($this), 2 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\RouterCacheWarmer($this->get('router')), 3 => new \Symfony\Bundle\TwigBundle\CacheWarmer\TemplateCacheCacheWarmer($this, $c), 4 => new \Symfony\Bridge\Doctrine\CacheWarmer\ProxyCacheWarmer($this->get('doctrine')), 5 => $this->get('fos_rest.allowed_methods_loader')));
    }
    protected function getCommentService()
    {
        return $this->services['comment'] = new \Newscoop\Services\CommentService($this->get('doctrine.orm.default_entity_manager'), $this->get('newscoop_newscoop.publication_service'));
    }
    protected function getComment_RepositoryService()
    {
        return $this->services['comment.repository'] = $this->get('doctrine')->getRepository('\\Newscoop\\Entity\\Comment');
    }
    protected function getCommentNotificationService()
    {
        return $this->services['comment_notification'] = new \Newscoop\Services\CommentNotificationService($this->get('email'), $this->get('comment'), $this->get('user'), $this->get('doctrine.orm.default_entity_manager'));
    }
    protected function getContent_PublicationService()
    {
        return $this->services['content.publication'] = new \Newscoop\Content\PublicationService($this->get('doctrine.orm.default_entity_manager'));
    }
    protected function getContent_SectionService()
    {
        return $this->services['content.section'] = new \Newscoop\Content\SectionService($this->get('doctrine.orm.default_entity_manager'));
    }
    protected function getContent_TypeService()
    {
        return $this->services['content.type'] = new \Newscoop\Content\ContentTypeService($this->get('doctrine.orm.default_entity_manager'));
    }
    protected function getDebug_EmergencyLoggerListenerService()
    {
        return $this->services['debug.emergency_logger_listener'] = new \Symfony\Component\HttpKernel\EventListener\ErrorsLoggerListener('emergency', $this->get('monolog.logger.emergency', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }
    protected function getDoctrineService()
    {
        return $this->services['doctrine'] = new \Doctrine\Bundle\DoctrineBundle\Registry($this, array('default' => 'doctrine.dbal.default_connection'), array('default' => 'doctrine.orm.default_entity_manager'), 'default', 'default');
    }
    protected function getDoctrine_AdodbService()
    {
        return $this->services['doctrine.adodb'] = new \Newscoop\Doctrine\AdoDbAdapter($this->get('doctrine.connection'));
    }
    protected function getDoctrine_ConnectionService()
    {
        return $this->services['doctrine.connection'] = $this->get('doctrine.orm.default_entity_manager')->getConnection();
    }
    protected function getDoctrine_Dbal_ConnectionFactoryService()
    {
        return $this->services['doctrine.dbal.connection_factory'] = new \Doctrine\Bundle\DoctrineBundle\ConnectionFactory(array('point' => array('class' => 'Newscoop\\NewscoopBundle\\ORM\\PointType', 'commented' => true), 'utcdatetime' => array('class' => 'Newscoop\\NewscoopBundle\\ORM\\UTCDateTimeType', 'commented' => true)));
    }
    protected function getDoctrine_Dbal_DefaultConnectionService()
    {
        $a = $this->get('annotation_reader');
        $b = new \Gedmo\Tree\TreeListener();
        $b->setAnnotationReader($a);
        $c = new \Gedmo\Sortable\SortableListener();
        $c->setAnnotationReader($a);
        $d = new \Symfony\Bridge\Doctrine\ContainerAwareEventManager($this);
        $d->addEventSubscriber($this->get('newscoop_newscoop.doctrine.event_dispatcher_proxy'));
        $d->addEventSubscriber($b);
        $d->addEventSubscriber($c);
        $d->addEventSubscriber($this->get('stof_doctrine_extensions.listener.translatable'));
        return $this->services['doctrine.dbal.default_connection'] = $this->get('doctrine.dbal.connection_factory')->createConnection(array('dbname' => 'newscoop', 'host' => 'localhost', 'port' => '3306', 'user' => 'root', 'password' => 'xC42N6cgQx&*FpGK', 'driver' => 'pdo_mysql', 'charset' => 'UTF8', 'driverOptions' => array()), new \Doctrine\DBAL\Configuration(), $d, array('enum' => 'string', 'point' => 'string', 'geometry' => 'string'));
    }
    protected function getDoctrine_EventManagerService()
    {
        return $this->services['doctrine.event_manager'] = $this->get('doctrine.orm.default_entity_manager')->getEventManager();
    }
    protected function getDoctrine_Orm_DefaultEntityManagerService()
    {
        $a = $this->get('annotation_reader');
        $b = new \Doctrine\Common\Cache\ArrayCache();
        $b->setNamespace('sf2orm_default_b1da6c832d5e1e3488c247e71c44ad12395826cc2b5e1274c84d27bf2c874a09');
        $c = new \Doctrine\Common\Cache\ArrayCache();
        $c->setNamespace('sf2orm_default_b1da6c832d5e1e3488c247e71c44ad12395826cc2b5e1274c84d27bf2c874a09');
        $d = new \Doctrine\Common\Cache\ArrayCache();
        $d->setNamespace('sf2orm_default_b1da6c832d5e1e3488c247e71c44ad12395826cc2b5e1274c84d27bf2c874a09');
        $e = new \Doctrine\ORM\Mapping\Driver\AnnotationDriver($a, array(0 => ($this->targetDirs[2].'/library/Newscoop'), 1 => ($this->targetDirs[2].'/library/Newscoop'), 2 => ($this->targetDirs[2].'/library/Newscoop'), 3 => ($this->targetDirs[2].'/library/Newscoop'), 4 => ($this->targetDirs[2].'/vendor/gedmo/doctrine-extensions/lib/Gedmo/Translatable/Entity/MappedSuperclass'), 5 => ($this->targetDirs[2].'/src/Newscoop/GimmeBundle/Entity'), 6 => ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Entity'), 7 => ($this->targetDirs[2].'/src/Newscoop/CommunityTickerBundle/Entity'), 8 => ($this->targetDirs[2].'/src/Newscoop/ArticlesBundle/Entity')));
        $f = new \Doctrine\ORM\Mapping\Driver\SimplifiedXmlDriver(array(($this->targetDirs[2].'/vendor/friendsofsymfony/oauth-server-bundle/FOS/OAuthServerBundle/Resources/config/doctrine') => 'FOS\\OAuthServerBundle\\Entity'));
        $f->setGlobalBasename('mapping');
        $g = new \Doctrine\ORM\Mapping\Driver\DriverChain();
        $g->addDriver($e, 'Newscoop\\Entity');
        $g->addDriver($e, 'Newscoop\\Package');
        $g->addDriver($e, 'Newscoop\\Image');
        $g->addDriver($e, 'Newscoop\\Subscription');
        $g->addDriver($e, 'Gedmo\\Translatable\\Entity');
        $g->addDriver($e, 'Newscoop\\GimmeBundle\\Entity');
        $g->addDriver($e, 'Newscoop\\NewscoopBundle\\Entity');
        $g->addDriver($e, 'Newscoop\\CommunityTickerBundle\\Entity');
        $g->addDriver($e, 'Newscoop\\ArticlesBundle\\Entity');
        $g->addDriver($f, 'FOS\\OAuthServerBundle\\Entity');
        $h = new \Doctrine\ORM\Configuration();
        $h->setEntityNamespaces(array('newscoop_entity' => 'Newscoop\\Entity', 'newscoop_package' => 'Newscoop\\Package', 'newscoop_image' => 'Newscoop\\Image', 'newscoop_subscription' => 'Newscoop\\Subscription', 'GedmoTranslatable' => 'Gedmo\\Translatable\\Entity', 'NewscoopGimmeBundle' => 'Newscoop\\GimmeBundle\\Entity', 'FOSOAuthServerBundle' => 'FOS\\OAuthServerBundle\\Entity', 'NewscoopNewscoopBundle' => 'Newscoop\\NewscoopBundle\\Entity', 'NewscoopCommunityTickerBundle' => 'Newscoop\\CommunityTickerBundle\\Entity', 'NewscoopArticlesBundle' => 'Newscoop\\ArticlesBundle\\Entity'));
        $h->setMetadataCacheImpl($b);
        $h->setQueryCacheImpl($c);
        $h->setResultCacheImpl($d);
        $h->setMetadataDriverImpl($g);
        $h->setProxyDir(($this->targetDirs[2].'/library/Proxy'));
        $h->setProxyNamespace('Proxy');
        $h->setAutoGenerateProxyClasses(false);
        $h->setClassMetadataFactoryName('Doctrine\\ORM\\Mapping\\ClassMetadataFactory');
        $h->setDefaultRepositoryClassName('Doctrine\\ORM\\EntityRepository');
        $h->setNamingStrategy(new \Doctrine\ORM\Mapping\DefaultNamingStrategy());
        $h->addCustomStringFunction('field', 'Newscoop\\Query\\MysqlField');
        $h->addCustomNumericFunction('rand', 'Newscoop\\Query\\MysqlRandom');
        $h->addCustomDatetimeFunction('dayofweek', 'Newscoop\\Query\\MysqlDayOfWeek');
        $h->addCustomDatetimeFunction('dayofmonth', 'Newscoop\\Query\\MysqlDayOfMonth');
        $h->addCustomDatetimeFunction('dayofyear', 'Newscoop\\Query\\MysqlDayOfYear');
        $h->addCustomDatetimeFunction('date_format', 'Newscoop\\Query\\MysqlDateFormat');
        $this->services['doctrine.orm.default_entity_manager'] = $instance = \Doctrine\ORM\EntityManager::create($this->get('doctrine.dbal.default_connection'), $h);
        $this->get('doctrine.orm.default_manager_configurator')->configure($instance);
        return $instance;
    }
    protected function getDoctrine_Orm_DefaultManagerConfiguratorService()
    {
        return $this->services['doctrine.orm.default_manager_configurator'] = new \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator(array(), array());
    }
    protected function getDoctrine_Orm_Validator_UniqueService()
    {
        return $this->services['doctrine.orm.validator.unique'] = new \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator($this->get('doctrine'));
    }
    protected function getDoctrine_Orm_ValidatorInitializerService()
    {
        return $this->services['doctrine.orm.validator_initializer'] = new \Symfony\Bridge\Doctrine\Validator\DoctrineInitializer($this->get('doctrine'));
    }
    protected function getEmailService()
    {
        return $this->services['email'] = new \Newscoop\Services\EmailService($this);
    }
    protected function getEventDispatcherService()
    {
        $this->services['event_dispatcher'] = $instance = new \Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher($this);
        $instance->addListenerService('knp_pager.before', array(0 => 'knp_paginator.subscriber.paginate', 1 => 'before'), 0);
        $instance->addListenerService('knp_pager.pagination', array(0 => 'knp_paginator.subscriber.paginate', 1 => 'pagination'), 0);
        $instance->addListenerService('knp_pager.before', array(0 => 'knp_paginator.subscriber.sortable', 1 => 'before'), 1);
        $instance->addListenerService('knp_pager.before', array(0 => 'knp_paginator.subscriber.filtration', 1 => 'before'), 1);
        $instance->addListenerService('knp_pager.pagination', array(0 => 'knp_paginator.subscriber.sliding_pagination', 1 => 'pagination'), 1);
        $instance->addListenerService('comment.update', array(0 => 'audit', 1 => 'update'), 0);
        $instance->addListenerService('comment.delete', array(0 => 'audit', 1 => 'update'), 0);
        $instance->addListenerService('alias.create', array(0 => 'audit', 1 => 'update'), 0);
        $instance->addListenerService('alias.update', array(0 => 'audit', 1 => 'update'), 0);
        $instance->addListenerService('alias.delete', array(0 => 'audit', 1 => 'update'), 0);
        $instance->addListenerService('article-attachment.create', array(0 => 'audit', 1 => 'update'), 0);
        $instance->addListenerService('article-attachment.delete', array(0 => 'audit', 1 => 'update'), 0);
        $instance->addListenerService('article-author.create', array(0 => 'audit', 1 => 'update'), 0);
        $instance->addListenerService('article-author.delete', array(0 => 'audit', 1 => 'update'), 0);
        $instance->addListenerService('article-image.create', array(0 => 'audit', 1 => 'update'), 0);
        $instance->addListenerService('article-image.delete', array(0 => 'audit', 1 => 'update'), 0);
        $instance->addListenerService('article-publish.create', array(0 => 'audit', 1 => 'update'), 0);
        $instance->addListenerService('article.create', array(0 => 'audit', 1 => 'update'), 0);
        $instance->addListenerService('article.delete', array(0 => 'audit', 1 => 'update'), 0);
        $instance->addListenerService('article-topic.attach', array(0 => 'audit', 1 => 'update'), 0);
        $instance->addListenerService('article-topic.detach', array(0 => 'audit', 1 => 'update'), 0);
        $instance->addListenerService('article-metadata.create', array(0 => 'audit', 1 => 'update'), 0);
        $instance->addListenerService('article-metadata.delete', array(0 => 'audit', 1 => 'update'), 0);
        $instance->addListenerService('attachment.create', array(0 => 'audit', 1 => 'update'), 0);
        $instance->addListenerService('attachment.delete', array(0 => 'audit', 1 => 'update'), 0);
        $instance->addListenerService('author-alias.create', array(0 => 'audit', 1 => 'update'), 0);
        $instance->addListenerService('author-alias.delete', array(0 => 'audit', 1 => 'update'), 0);
        $instance->addListenerService('author-biography.create', array(0 => 'audit', 1 => 'update'), 0);
        $instance->addListenerService('author-biography.delete', array(0 => 'audit', 1 => 'update'), 0);
        $instance->addListenerService('author.create', array(0 => 'audit', 1 => 'update'), 0);
        $instance->addListenerService('author.delete', array(0 => 'audit', 1 => 'update'), 0);
        $instance->addListenerService('author-type.create', array(0 => 'audit', 1 => 'update'), 0);
        $instance->addListenerService('author-type.delete', array(0 => 'audit', 1 => 'update'), 0);
        $instance->addListenerService('county.create', array(0 => 'audit', 1 => 'update'), 0);
        $instance->addListenerService('county.delete', array(0 => 'audit', 1 => 'update'), 0);
        $instance->addListenerService('image.create', array(0 => 'audit', 1 => 'update'), 0);
        $instance->addListenerService('image.delete', array(0 => 'audit', 1 => 'update'), 0);
        $instance->addListenerService('issue.create', array(0 => 'audit', 1 => 'update'), 0);
        $instance->addListenerService('issue.delete', array(0 => 'audit', 1 => 'update'), 0);
        $instance->addListenerService('language.create', array(0 => 'audit', 1 => 'update'), 0);
        $instance->addListenerService('language.delete', array(0 => 'audit', 1 => 'update'), 0);
        $instance->addListenerService('location.create', array(0 => 'audit', 1 => 'update'), 0);
        $instance->addListenerService('location.delete', array(0 => 'audit', 1 => 'update'), 0);
        $instance->addListenerService('map.create', array(0 => 'audit', 1 => 'update'), 0);
        $instance->addListenerService('map.delete', array(0 => 'audit', 1 => 'update'), 0);
        $instance->addListenerService('plugin.create', array(0 => 'audit', 1 => 'update'), 0);
        $instance->addListenerService('plugin.delete', array(0 => 'audit', 1 => 'update'), 0);
        $instance->addListenerService('publication.create', array(0 => 'audit', 1 => 'update'), 0);
        $instance->addListenerService('publication.delete', array(0 => 'audit', 1 => 'update'), 0);
        $instance->addListenerService('section.create', array(0 => 'audit', 1 => 'update'), 0);
        $instance->addListenerService('section.delete', array(0 => 'audit', 1 => 'update'), 0);
        $instance->addListenerService('subscription.create', array(0 => 'audit', 1 => 'update'), 0);
        $instance->addListenerService('subscription.delete', array(0 => 'audit', 1 => 'update'), 0);
        $instance->addListenerService('system-preferences.create', array(0 => 'audit', 1 => 'update'), 0);
        $instance->addListenerService('system-preferences.delete', array(0 => 'audit', 1 => 'update'), 0);
        $instance->addListenerService('template.create', array(0 => 'audit', 1 => 'update'), 0);
        $instance->addListenerService('template.delete', array(0 => 'audit', 1 => 'update'), 0);
        $instance->addListenerService('topic.create', array(0 => 'audit', 1 => 'update'), 0);
        $instance->addListenerService('topic.delete', array(0 => 'audit', 1 => 'update'), 0);
        $instance->addListenerService('translation.create', array(0 => 'audit', 1 => 'update'), 0);
        $instance->addListenerService('translation.delete', array(0 => 'audit', 1 => 'update'), 0);
        $instance->addListenerService('comment.create', array(0 => 'comment', 1 => 'update'), 0);
        $instance->addListenerService('comment.update', array(0 => 'comment', 1 => 'update'), 0);
        $instance->addListenerService('comment.recommended', array(0 => 'comment', 1 => 'update'), 0);
        $instance->addListenerService('comment.delete', array(0 => 'comment', 1 => 'update'), 0);
        $instance->addListenerService('comment.create', array(0 => 'comment_notification', 1 => 'update'), 0);
        $instance->addListenerService('user.set_points', array(0 => 'user', 1 => 'updateUserPoints'), 0);
        $instance->addListenerService('image.delivered', array(0 => 'user_attributes', 1 => 'update'), 0);
        $instance->addListenerService('image.approved', array(0 => 'user_attributes', 1 => 'update'), 0);
        $instance->addListenerService('image.published', array(0 => 'user_attributes', 1 => 'update'), 0);
        $instance->addListenerService('document.delivered', array(0 => 'user_attributes', 1 => 'update'), 0);
        $instance->addListenerService('document.approved', array(0 => 'user_attributes', 1 => 'update'), 0);
        $instance->addListenerService('image.published', array(0 => 'user_points', 1 => 'update'), 0);
        $instance->addListenerService('kernel.controller', array(0 => 'fos_rest.view_response_listener', 1 => 'onKernelController'), -10);
        $instance->addListenerService('kernel.view', array(0 => 'fos_rest.view_response_listener', 1 => 'onKernelView'), 100);
        $instance->addListenerService('kernel.request', array(0 => 'fos_rest.body_listener', 1 => 'onKernelRequest'), 0);
        $instance->addListenerService('kernel.controller', array(0 => 'fos_rest.format_listener', 1 => 'onKernelController'), 0);
        $instance->addListenerService('kernel.request', array(0 => 'fos_rest.mime_type_listener', 1 => 'onKernelRequest'), 200);
        $instance->addListenerService('kernel.response', array(0 => 'fos_rest.allowed_methods_listener', 1 => 'onKernelResponse'), 0);
        $instance->addListenerService('kernel.request', array(0 => 'newscoop.paginator.pagination_listener', 1 => 'onRequest'), 31);
        $instance->addListenerService('kernel.request', array(0 => 'newscoop.gimme.listener.link_request', 1 => 'onKernelRequest'), 0);
        $instance->addListenerService('kernel.request', array(0 => 'newscoop.gimme.listener.public_resources', 1 => 'onRequest'), 6);
        $instance->addListenerService('kernel.response', array(0 => 'newscoop.gimme.listener.format_json', 1 => 'onResponse'), 0);
        $instance->addListenerService('kernel.request', array(0 => 'newscoop.gimme.listener.allow_origin', 1 => 'onKernelRequest'), 0);
        $instance->addListenerService('kernel.response', array(0 => 'newscoop.gimme.listener.allow_origin', 1 => 'onResponse'), 0);
        $instance->addListenerService('fos_oauth_server.pre_authorization_process', array(0 => 'newscoop.gimme.oauth_event_listener', 1 => 'onPreAuthorizationProcess'), 0);
        $instance->addListenerService('fos_oauth_server.post_authorization_process', array(0 => 'newscoop.gimme.oauth_event_listener', 1 => 'onPostAuthorizationProcess'), 0);
        $instance->addListenerService('kernel.request', array(0 => 'knp_paginator.subscriber.sliding_pagination', 1 => 'onKernelRequest'), 0);
        $instance->addListenerService('kernel.request', array(0 => 'knp_menu.listener.voters', 1 => 'onKernelRequest'), 0);
        $instance->addListenerService('kernel.request', array(0 => 'newscoop.zendbridge.zendapplication_listener', 1 => 'onRequest'), 31);
        $instance->addListenerService('kernel.request', array(0 => 'newscoop_newscoop.listener.publication', 1 => 'onRequest'), 7);
        $instance->addListenerService('kernel.request', array(0 => 'newscoop_newscoop.listener.issue', 1 => 'onRequest'), 0);
        $instance->addListenerService('kernel.request', array(0 => 'newscoop_newscoop.listener.locale_listener', 1 => 'onRequest'), 0);
        $instance->addListenerService('kernel.response', array(0 => 'newscoop_newscoop.listener.locale_listener', 1 => 'onResponse'), 0);
        $instance->addListenerService('kernel.request', array(0 => 'newscoop_newscoop.listener.route_listener', 1 => 'onRequest'), 30);
        $instance->addListenerService('kernel.response', array(0 => 'newscoop_newscoop.listener.no_cache_listener', 1 => 'onResponse'), 0);
        $instance->addListenerService('kernel.request', array(0 => 'newscoop_newscoop.translation_listener', 1 => 'onRequest'), 0);
        $instance->addListenerService('newscoop.listobjects.register', array(0 => 'newscoop_newscoop.list_objects.listener', 1 => 'registerObjects'), 0);
        $instance->addListenerService('kernel.request', array(0 => 'newscoop_newscoop.listener.userip', 1 => 'onRequest'), 0);
        $instance->addListenerService('kernel.request', array(0 => 'newscoop_newscoop.listener.article', 1 => 'onRequest'), 0);
        $instance->addListenerService('kernel.exception', array(0 => 'newscoop_newscoop.listener.access_denied', 1 => 'onKernelException'), 0);
        $instance->addListenerService('user.register', array(0 => 'newscoop_ticker_plugin.service', 1 => 'update'), 0);
        $instance->addListenerService('comment.recommended', array(0 => 'newscoop_ticker_plugin.service', 1 => 'update'), 0);
        $instance->addListenerService('topic.follow', array(0 => 'newscoop_ticker_plugin.service', 1 => 'update'), 0);
        $instance->addListenerService('blog.published', array(0 => 'newscoop_ticker_plugin.service', 1 => 'update'), 0);
        $instance->addListenerService('newscoop.listobjects.register', array(0 => 'newscoop_ticker_plugin.list_objects.listener', 1 => 'registerObjects'), 0);
        $instance->addListenerService('newscoop_admin.interface.article.edit.sidebar.editorialComments', array(0 => 'articles.hooks.listener', 1 => 'renderEditorialCommentsTemplate'), 0);
        $instance->addSubscriberService('response_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\ResponseListener');
        $instance->addSubscriberService('streamed_response_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\StreamedResponseListener');
        $instance->addSubscriberService('locale_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\LocaleListener');
        $instance->addSubscriberService('debug.emergency_logger_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\ErrorsLoggerListener');
        $instance->addSubscriberService('session_listener', 'Symfony\\Bundle\\FrameworkBundle\\EventListener\\SessionListener');
        $instance->addSubscriberService('session.save_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\SaveSessionListener');
        $instance->addSubscriberService('fragment.listener', 'Symfony\\Component\\HttpKernel\\EventListener\\FragmentListener');
        $instance->addSubscriberService('router_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\RouterListener');
        $instance->addSubscriberService('security.firewall', 'Symfony\\Component\\Security\\Http\\Firewall');
        $instance->addSubscriberService('security.rememberme.response_listener', 'Symfony\\Component\\Security\\Http\\RememberMe\\ResponseListener');
        $instance->addSubscriberService('twig.exception_listener', 'Newscoop\\GimmeBundle\\EventListener\\ExceptionListener');
        $instance->addSubscriberService('swiftmailer.email_sender.listener', 'Symfony\\Bundle\\SwiftmailerBundle\\EventListener\\EmailSenderListener');
        $instance->addSubscriberService('sensio_framework_extra.controller.listener', 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ControllerListener');
        $instance->addSubscriberService('sensio_framework_extra.converter.listener', 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ParamConverterListener');
        $instance->addSubscriberService('sensio_framework_extra.cache.listener', 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\HttpCacheListener');
        $instance->addSubscriberService('sensio_framework_extra.security.listener', 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\SecurityListener');
        $instance->addSubscriberService('newscoop.paginator.query_subscriber', 'Newscoop\\GimmeBundle\\EventListener\\QuerySubscriber');
        $instance->addSubscriberService('newscoop.serializer.serializer_subscriber', 'Newscoop\\GimmeBundle\\EventListener\\SerializerSubscriber');
        $instance->addSubscriberService('newscoop.paginator.pagination_extra_data_subscriber', 'Newscoop\\GimmeBundle\\EventListener\\PaginationExtraDataSubscriber');
        $instance->addSubscriberService('newscoop_ticker_plugin.lifecyclesubscriber', 'Newscoop\\CommunityTickerBundle\\EventListener\\LifecycleSubscriber');
        $instance->addSubscriberService('stof_doctrine_extensions.event_listener.locale', 'Stof\\DoctrineExtensionsBundle\\EventListener\\LocaleListener');
        return $instance;
    }
    protected function getEwzRecaptcha_Form_TypeService()
    {
        return $this->services['ewz_recaptcha.form.type'] = new \Newscoop\NewscoopBundle\Form\Type\RecaptchaType($this);
    }
    protected function getEwzRecaptcha_Validator_TrueService()
    {
        return $this->services['ewz_recaptcha.validator.true'] = new \EWZ\Bundle\RecaptchaBundle\Validator\Constraints\TrueValidator($this);
    }
    protected function getFileLocatorService()
    {
        return $this->services['file_locator'] = new \Symfony\Component\HttpKernel\Config\FileLocator($this->get('kernel'), ($this->targetDirs[2].'/application/Resources'));
    }
    protected function getFilesystemService()
    {
        return $this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem();
    }
    protected function getForm_CsrfProviderService()
    {
        return $this->services['form.csrf_provider'] = new \Symfony\Component\Form\Extension\Csrf\CsrfProvider\CsrfTokenManagerAdapter($this->get('security.csrf.token_manager'));
    }
    protected function getForm_FactoryService()
    {
        return $this->services['form.factory'] = new \Symfony\Component\Form\FormFactory($this->get('form.registry'), $this->get('form.resolved_type_factory'));
    }
    protected function getForm_RegistryService()
    {
        return $this->services['form.registry'] = new \Symfony\Component\Form\FormRegistry(array(0 => new \Symfony\Component\Form\Extension\DependencyInjection\DependencyInjectionExtension($this, array('form' => 'form.type.form', 'birthday' => 'form.type.birthday', 'checkbox' => 'form.type.checkbox', 'choice' => 'form.type.choice', 'collection' => 'form.type.collection', 'country' => 'form.type.country', 'date' => 'form.type.date', 'datetime' => 'form.type.datetime', 'email' => 'form.type.email', 'file' => 'form.type.file', 'hidden' => 'form.type.hidden', 'integer' => 'form.type.integer', 'language' => 'form.type.language', 'locale' => 'form.type.locale', 'money' => 'form.type.money', 'number' => 'form.type.number', 'password' => 'form.type.password', 'percent' => 'form.type.percent', 'radio' => 'form.type.radio', 'repeated' => 'form.type.repeated', 'search' => 'form.type.search', 'textarea' => 'form.type.textarea', 'text' => 'form.type.text', 'time' => 'form.type.time', 'timezone' => 'form.type.timezone', 'url' => 'form.type.url', 'button' => 'form.type.button', 'submit' => 'form.type.submit', 'reset' => 'form.type.reset', 'currency' => 'form.type.currency', 'entity' => 'form.type.entity', 'ewz_recaptcha' => 'ewz_recaptcha.form.type', 'fos_oauth_server_authorize' => 'fos_oauth_server.authorize.form.type'), array('form' => array(0 => 'form.type_extension.form.http_foundation', 1 => 'form.type_extension.form.validator', 2 => 'form.type_extension.csrf', 3 => 'nelmio_api_doc.form.extension.description_form_type_extension'), 'repeated' => array(0 => 'form.type_extension.repeated.validator'), 'submit' => array(0 => 'form.type_extension.submit.validator')), array(0 => 'form.type_guesser.validator', 1 => 'form.type_guesser.doctrine'))), $this->get('form.resolved_type_factory'));
    }
    protected function getForm_ResolvedTypeFactoryService()
    {
        return $this->services['form.resolved_type_factory'] = new \Symfony\Component\Form\ResolvedFormTypeFactory();
    }
    protected function getForm_Type_BirthdayService()
    {
        return $this->services['form.type.birthday'] = new \Symfony\Component\Form\Extension\Core\Type\BirthdayType();
    }
    protected function getForm_Type_ButtonService()
    {
        return $this->services['form.type.button'] = new \Symfony\Component\Form\Extension\Core\Type\ButtonType();
    }
    protected function getForm_Type_CheckboxService()
    {
        return $this->services['form.type.checkbox'] = new \Symfony\Component\Form\Extension\Core\Type\CheckboxType();
    }
    protected function getForm_Type_ChoiceService()
    {
        return $this->services['form.type.choice'] = new \Symfony\Component\Form\Extension\Core\Type\ChoiceType();
    }
    protected function getForm_Type_CollectionService()
    {
        return $this->services['form.type.collection'] = new \Symfony\Component\Form\Extension\Core\Type\CollectionType();
    }
    protected function getForm_Type_CountryService()
    {
        return $this->services['form.type.country'] = new \Symfony\Component\Form\Extension\Core\Type\CountryType();
    }
    protected function getForm_Type_CurrencyService()
    {
        return $this->services['form.type.currency'] = new \Symfony\Component\Form\Extension\Core\Type\CurrencyType();
    }
    protected function getForm_Type_DateService()
    {
        return $this->services['form.type.date'] = new \Symfony\Component\Form\Extension\Core\Type\DateType();
    }
    protected function getForm_Type_DatetimeService()
    {
        return $this->services['form.type.datetime'] = new \Symfony\Component\Form\Extension\Core\Type\DateTimeType();
    }
    protected function getForm_Type_EmailService()
    {
        return $this->services['form.type.email'] = new \Symfony\Component\Form\Extension\Core\Type\EmailType();
    }
    protected function getForm_Type_EntityService()
    {
        return $this->services['form.type.entity'] = new \Symfony\Bridge\Doctrine\Form\Type\EntityType($this->get('doctrine'));
    }
    protected function getForm_Type_FileService()
    {
        return $this->services['form.type.file'] = new \Symfony\Component\Form\Extension\Core\Type\FileType();
    }
    protected function getForm_Type_FormService()
    {
        return $this->services['form.type.form'] = new \Symfony\Component\Form\Extension\Core\Type\FormType($this->get('property_accessor'));
    }
    protected function getForm_Type_HiddenService()
    {
        return $this->services['form.type.hidden'] = new \Symfony\Component\Form\Extension\Core\Type\HiddenType();
    }
    protected function getForm_Type_IntegerService()
    {
        return $this->services['form.type.integer'] = new \Symfony\Component\Form\Extension\Core\Type\IntegerType();
    }
    protected function getForm_Type_LanguageService()
    {
        return $this->services['form.type.language'] = new \Symfony\Component\Form\Extension\Core\Type\LanguageType();
    }
    protected function getForm_Type_LocaleService()
    {
        return $this->services['form.type.locale'] = new \Symfony\Component\Form\Extension\Core\Type\LocaleType();
    }
    protected function getForm_Type_MoneyService()
    {
        return $this->services['form.type.money'] = new \Symfony\Component\Form\Extension\Core\Type\MoneyType();
    }
    protected function getForm_Type_NumberService()
    {
        return $this->services['form.type.number'] = new \Symfony\Component\Form\Extension\Core\Type\NumberType();
    }
    protected function getForm_Type_PasswordService()
    {
        return $this->services['form.type.password'] = new \Symfony\Component\Form\Extension\Core\Type\PasswordType();
    }
    protected function getForm_Type_PercentService()
    {
        return $this->services['form.type.percent'] = new \Symfony\Component\Form\Extension\Core\Type\PercentType();
    }
    protected function getForm_Type_RadioService()
    {
        return $this->services['form.type.radio'] = new \Symfony\Component\Form\Extension\Core\Type\RadioType();
    }
    protected function getForm_Type_RepeatedService()
    {
        return $this->services['form.type.repeated'] = new \Symfony\Component\Form\Extension\Core\Type\RepeatedType();
    }
    protected function getForm_Type_ResetService()
    {
        return $this->services['form.type.reset'] = new \Symfony\Component\Form\Extension\Core\Type\ResetType();
    }
    protected function getForm_Type_SearchService()
    {
        return $this->services['form.type.search'] = new \Symfony\Component\Form\Extension\Core\Type\SearchType();
    }
    protected function getForm_Type_SubmitService()
    {
        return $this->services['form.type.submit'] = new \Symfony\Component\Form\Extension\Core\Type\SubmitType();
    }
    protected function getForm_Type_TextService()
    {
        return $this->services['form.type.text'] = new \Symfony\Component\Form\Extension\Core\Type\TextType();
    }
    protected function getForm_Type_TextareaService()
    {
        return $this->services['form.type.textarea'] = new \Symfony\Component\Form\Extension\Core\Type\TextareaType();
    }
    protected function getForm_Type_TimeService()
    {
        return $this->services['form.type.time'] = new \Symfony\Component\Form\Extension\Core\Type\TimeType();
    }
    protected function getForm_Type_TimezoneService()
    {
        return $this->services['form.type.timezone'] = new \Symfony\Component\Form\Extension\Core\Type\TimezoneType();
    }
    protected function getForm_Type_UrlService()
    {
        return $this->services['form.type.url'] = new \Symfony\Component\Form\Extension\Core\Type\UrlType();
    }
    protected function getForm_TypeExtension_CsrfService()
    {
        return $this->services['form.type_extension.csrf'] = new \Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension($this->get('form.csrf_provider'), true, '_token', $this->get('translator.default'), 'validators');
    }
    protected function getForm_TypeExtension_Form_HttpFoundationService()
    {
        return $this->services['form.type_extension.form.http_foundation'] = new \Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension(new \Symfony\Component\Form\Extension\HttpFoundation\HttpFoundationRequestHandler());
    }
    protected function getForm_TypeExtension_Form_ValidatorService()
    {
        return $this->services['form.type_extension.form.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension($this->get('validator'));
    }
    protected function getForm_TypeExtension_Repeated_ValidatorService()
    {
        return $this->services['form.type_extension.repeated.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension();
    }
    protected function getForm_TypeExtension_Submit_ValidatorService()
    {
        return $this->services['form.type_extension.submit.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension();
    }
    protected function getForm_TypeGuesser_DoctrineService()
    {
        return $this->services['form.type_guesser.doctrine'] = new \Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser($this->get('doctrine'));
    }
    protected function getForm_TypeGuesser_ValidatorService()
    {
        return $this->services['form.type_guesser.validator'] = new \Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser($this->get('validator'));
    }
    protected function getFosJsRouting_ControllerService()
    {
        return $this->services['fos_js_routing.controller'] = new \FOS\JsRoutingBundle\Controller\Controller($this->get('fos_js_routing.serializer'), $this->get('fos_js_routing.extractor'), array('enabled' => false), false);
    }
    protected function getFosJsRouting_ExtractorService()
    {
        return $this->services['fos_js_routing.extractor'] = new \FOS\JsRoutingBundle\Extractor\ExposedRoutesExtractor($this->get('router'), array(), __DIR__, array('FrameworkBundle' => 'Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle', 'SecurityBundle' => 'Symfony\\Bundle\\SecurityBundle\\SecurityBundle', 'TwigBundle' => 'Symfony\\Bundle\\TwigBundle\\TwigBundle', 'MonologBundle' => 'Symfony\\Bundle\\MonologBundle\\MonologBundle', 'SwiftmailerBundle' => 'Symfony\\Bundle\\SwiftmailerBundle\\SwiftmailerBundle', 'AsseticBundle' => 'Symfony\\Bundle\\AsseticBundle\\AsseticBundle', 'DoctrineBundle' => 'Doctrine\\Bundle\\DoctrineBundle\\DoctrineBundle', 'SensioFrameworkExtraBundle' => 'Sensio\\Bundle\\FrameworkExtraBundle\\SensioFrameworkExtraBundle', 'JMSSerializerBundle' => 'JMS\\SerializerBundle\\JMSSerializerBundle', 'FOSRestBundle' => 'FOS\\RestBundle\\FOSRestBundle', 'NewscoopGimmeBundle' => 'Newscoop\\GimmeBundle\\NewscoopGimmeBundle', 'KnpPaginatorBundle' => 'Knp\\Bundle\\PaginatorBundle\\KnpPaginatorBundle', 'KnpMenuBundle' => 'Knp\\Bundle\\MenuBundle\\KnpMenuBundle', 'EWZRecaptchaBundle' => 'EWZ\\Bundle\\RecaptchaBundle\\EWZRecaptchaBundle', 'FOSJsRoutingBundle' => 'FOS\\JsRoutingBundle\\FOSJsRoutingBundle', 'BazingaJsTranslationBundle' => 'Bazinga\\Bundle\\JsTranslationBundle\\BazingaJsTranslationBundle', 'FOSOAuthServerBundle' => 'FOS\\OAuthServerBundle\\FOSOAuthServerBundle', 'NelmioApiDocBundle' => 'Nelmio\\ApiDocBundle\\NelmioApiDocBundle', 'NewscoopZendBridgeBundle' => 'Newscoop\\ZendBridgeBundle\\NewscoopZendBridgeBundle', 'NewscoopNewscoopBundle' => 'Newscoop\\NewscoopBundle\\NewscoopNewscoopBundle', 'NewscoopCommunityTickerBundle' => 'Newscoop\\CommunityTickerBundle\\NewscoopCommunityTickerBundle', 'NewscoopArticlesBundle' => 'Newscoop\\ArticlesBundle\\NewscoopArticlesBundle', 'StofDoctrineExtensionsBundle' => 'Stof\\DoctrineExtensionsBundle\\StofDoctrineExtensionsBundle', 'SensioGeneratorBundle' => 'Sensio\\Bundle\\GeneratorBundle\\SensioGeneratorBundle', 'NewscoopPluginGeneratorBundle' => 'Newscoop\\PluginGeneratorBundle\\NewscoopPluginGeneratorBundle'));
    }
    protected function getFosJsRouting_SerializerService()
    {
        return $this->services['fos_js_routing.serializer'] = new \Symfony\Component\Serializer\Serializer(array(0 => new \Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer()), array('json' => new \Symfony\Component\Serializer\Encoder\JsonEncoder()));
    }
    protected function getFosOauthServer_AccessTokenManager_DefaultService()
    {
        return $this->services['fos_oauth_server.access_token_manager.default'] = new \FOS\OAuthServerBundle\Entity\AccessTokenManager($this->get('fos_oauth_server.entity_manager'), 'Newscoop\\GimmeBundle\\Entity\\AccessToken');
    }
    protected function getFosOauthServer_AuthCodeManager_DefaultService()
    {
        return $this->services['fos_oauth_server.auth_code_manager.default'] = new \FOS\OAuthServerBundle\Entity\AuthCodeManager($this->get('fos_oauth_server.entity_manager'), 'Newscoop\\GimmeBundle\\Entity\\AuthCode');
    }
    protected function getFosOauthServer_Authorize_FormService()
    {
        return $this->services['fos_oauth_server.authorize.form'] = $this->get('form.factory')->createNamed('fos_oauth_server_authorize_form', 'fos_oauth_server_authorize', NULL, array('validation_groups' => array(0 => 'Authorize', 1 => 'Default')));
    }
    protected function getFosOauthServer_Authorize_Form_Handler_DefaultService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('fos_oauth_server.authorize.form.handler.default', 'request');
        }
        return $this->services['fos_oauth_server.authorize.form.handler.default'] = $this->scopedServices['request']['fos_oauth_server.authorize.form.handler.default'] = new \FOS\OAuthServerBundle\Form\Handler\AuthorizeFormHandler($this->get('fos_oauth_server.authorize.form'), $this->get('request'));
    }
    protected function getFosOauthServer_Authorize_Form_TypeService()
    {
        return $this->services['fos_oauth_server.authorize.form.type'] = new \FOS\OAuthServerBundle\Form\Type\AuthorizeFormType();
    }
    protected function getFosOauthServer_ClientManager_DefaultService()
    {
        return $this->services['fos_oauth_server.client_manager.default'] = new \FOS\OAuthServerBundle\Entity\ClientManager($this->get('fos_oauth_server.entity_manager'), 'Newscoop\\GimmeBundle\\Entity\\Client');
    }
    protected function getFosOauthServer_Controller_TokenService()
    {
        return $this->services['fos_oauth_server.controller.token'] = new \FOS\OAuthServerBundle\Controller\TokenController($this->get('fos_oauth_server.server'));
    }
    protected function getFosOauthServer_RefreshTokenManager_DefaultService()
    {
        return $this->services['fos_oauth_server.refresh_token_manager.default'] = new \FOS\OAuthServerBundle\Entity\RefreshTokenManager($this->get('fos_oauth_server.entity_manager'), 'Newscoop\\GimmeBundle\\Entity\\RefreshToken');
    }
    protected function getFosOauthServer_ServerService()
    {
        return $this->services['fos_oauth_server.server'] = new \OAuth2\OAuth2($this->get('fos_oauth_server.storage'), array('supported_scopes' => 'standard_access'));
    }
    protected function getFosOauthServer_StorageService()
    {
        return $this->services['fos_oauth_server.storage'] = new \FOS\OAuthServerBundle\Storage\OAuthStorage($this->get('fos_oauth_server.client_manager.default'), $this->get('fos_oauth_server.access_token_manager.default'), $this->get('fos_oauth_server.refresh_token_manager.default'), $this->get('fos_oauth_server.auth_code_manager.default'), $this->get('user.manager'), $this->get('security.encoder_factory'));
    }
    protected function getFosRest_AllowedMethodsListenerService()
    {
        return $this->services['fos_rest.allowed_methods_listener'] = new \FOS\RestBundle\EventListener\AllowedMethodsListener($this->get('fos_rest.allowed_methods_loader'));
    }
    protected function getFosRest_AllowedMethodsLoaderService()
    {
        return $this->services['fos_rest.allowed_methods_loader'] = new \FOS\RestBundle\Response\AllowedMethodsLoader\AllowedMethodsRouterLoader($this->get('router'), (__DIR__.'/fos_rest'), false);
    }
    protected function getFosRest_BodyListenerService()
    {
        return $this->services['fos_rest.body_listener'] = new \FOS\RestBundle\EventListener\BodyListener($this->get('fos_rest.decoder_provider'));
    }
    protected function getFosRest_Decoder_JsonService()
    {
        return $this->services['fos_rest.decoder.json'] = new \FOS\Rest\Decoder\JsonDecoder();
    }
    protected function getFosRest_Decoder_JsontoformService()
    {
        return $this->services['fos_rest.decoder.jsontoform'] = new \FOS\Rest\Decoder\JsonToFormDecoder();
    }
    protected function getFosRest_Decoder_XmlService()
    {
        return $this->services['fos_rest.decoder.xml'] = new \FOS\Rest\Decoder\XmlDecoder();
    }
    protected function getFosRest_DecoderProviderService()
    {
        $this->services['fos_rest.decoder_provider'] = $instance = new \FOS\RestBundle\Decoder\ContainerDecoderProvider(array('json' => 'fos_rest.decoder.json'));
        $instance->setContainer($this);
        return $instance;
    }
    protected function getFosRest_FormatListenerService()
    {
        return $this->services['fos_rest.format_listener'] = new \FOS\RestBundle\EventListener\FormatListener($this->get('fos_rest.format_negotiator'), 'json', array(0 => 'json', 1 => 'html'), true);
    }
    protected function getFosRest_FormatNegotiatorService()
    {
        return $this->services['fos_rest.format_negotiator'] = new \FOS\RestBundle\Util\FormatNegotiator();
    }
    protected function getFosRest_Inflector_DoctrineService()
    {
        return $this->services['fos_rest.inflector.doctrine'] = new \FOS\RestBundle\Util\Inflector\DoctrineInflector();
    }
    protected function getFosRest_MimeTypeListenerService()
    {
        return $this->services['fos_rest.mime_type_listener'] = new \FOS\RestBundle\EventListener\MimeTypeListener(array('json' => array(0 => 'application/json', 1 => 'application/x-json', 2 => 'application/vnd.sourcefabric-org.newscoop+json')), $this->get('fos_rest.format_negotiator'));
    }
    protected function getFosRest_Request_ParamFetcherService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('fos_rest.request.param_fetcher', 'request');
        }
        return $this->services['fos_rest.request.param_fetcher'] = $this->scopedServices['request']['fos_rest.request.param_fetcher'] = new \FOS\RestBundle\Request\ParamFetcher($this->get('fos_rest.request.param_fetcher.reader'), $this->get('request'));
    }
    protected function getFosRest_Request_ParamFetcher_ReaderService()
    {
        return $this->services['fos_rest.request.param_fetcher.reader'] = new \FOS\RestBundle\Request\ParamReader($this->get('annotation_reader'));
    }
    protected function getFosRest_Routing_Loader_ControllerService()
    {
        return $this->services['fos_rest.routing.loader.controller'] = new \FOS\RestBundle\Routing\Loader\RestRouteLoader($this, $this->get('file_locator'), $this->get('controller_name_converter'), $this->get('fos_rest.routing.loader.reader.controller'), NULL);
    }
    protected function getFosRest_Routing_Loader_ProcessorService()
    {
        return $this->services['fos_rest.routing.loader.processor'] = new \FOS\RestBundle\Routing\Loader\RestRouteProcessor();
    }
    protected function getFosRest_Routing_Loader_Reader_ActionService()
    {
        return $this->services['fos_rest.routing.loader.reader.action'] = new \FOS\RestBundle\Routing\Loader\Reader\RestActionReader($this->get('annotation_reader'), $this->get('fos_rest.request.param_fetcher.reader'), $this->get('fos_rest.inflector.doctrine'), true, array('json' => false, 'html' => true));
    }
    protected function getFosRest_Routing_Loader_Reader_ControllerService()
    {
        return $this->services['fos_rest.routing.loader.reader.controller'] = new \FOS\RestBundle\Routing\Loader\Reader\RestControllerReader($this->get('fos_rest.routing.loader.reader.action'), $this->get('annotation_reader'));
    }
    protected function getFosRest_Routing_Loader_XmlCollectionService()
    {
        return $this->services['fos_rest.routing.loader.xml_collection'] = new \FOS\RestBundle\Routing\Loader\RestXmlCollectionLoader($this->get('file_locator'), $this->get('fos_rest.routing.loader.processor'));
    }
    protected function getFosRest_Routing_Loader_YamlCollectionService()
    {
        return $this->services['fos_rest.routing.loader.yaml_collection'] = new \FOS\RestBundle\Routing\Loader\RestYamlCollectionLoader($this->get('file_locator'), $this->get('fos_rest.routing.loader.processor'));
    }
    protected function getFosRest_ViewHandlerService()
    {
        $this->services['fos_rest.view_handler'] = $instance = new \FOS\RestBundle\View\ViewHandler(array('json' => false, 'html' => true), 400, 204, false, array('html' => 302), 'twig');
        $instance->setContainer($this);
        return $instance;
    }
    protected function getFosRest_ViewResponseListenerService()
    {
        return $this->services['fos_rest.view_response_listener'] = new \FOS\RestBundle\EventListener\ViewResponseListener($this);
    }
    protected function getFragment_HandlerService()
    {
        $this->services['fragment.handler'] = $instance = new \Symfony\Component\HttpKernel\Fragment\FragmentHandler(array(), false, $this->get('request_stack'));
        $instance->addRenderer($this->get('fragment.renderer.inline'));
        $instance->addRenderer($this->get('fragment.renderer.hinclude'));
        $instance->addRenderer($this->get('fragment.renderer.esi'));
        return $instance;
    }
    protected function getFragment_ListenerService()
    {
        return $this->services['fragment.listener'] = new \Symfony\Component\HttpKernel\EventListener\FragmentListener($this->get('uri_signer'), '/_fragment');
    }
    protected function getFragment_Renderer_EsiService()
    {
        $this->services['fragment.renderer.esi'] = $instance = new \Symfony\Component\HttpKernel\Fragment\EsiFragmentRenderer(NULL, $this->get('fragment.renderer.inline'), $this->get('uri_signer'));
        $instance->setFragmentPath('/_fragment');
        return $instance;
    }
    protected function getFragment_Renderer_HincludeService()
    {
        $this->services['fragment.renderer.hinclude'] = $instance = new \Symfony\Bundle\FrameworkBundle\Fragment\ContainerAwareHIncludeFragmentRenderer($this, $this->get('uri_signer'), NULL);
        $instance->setFragmentPath('/_fragment');
        return $instance;
    }
    protected function getFragment_Renderer_InlineService()
    {
        $this->services['fragment.renderer.inline'] = $instance = new \Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer($this->get('http_kernel'), $this->get('event_dispatcher'));
        $instance->setFragmentPath('/_fragment');
        return $instance;
    }
    protected function getHttpKernelService()
    {
        return $this->services['http_kernel'] = new \Symfony\Component\HttpKernel\DependencyInjection\ContainerAwareHttpKernel($this->get('event_dispatcher'), $this, $this->get('controller_resolver'), $this->get('request_stack'));
    }
    protected function getImageService()
    {
        return $this->services['image'] = new \Newscoop\Image\ImageService(array('image_path' => ($this->targetDirs[2].'/application/../images/'), 'image_prefix' => 'cms-image-', 'thumbnail_path' => ($this->targetDirs[2].'/application/../images/thumbnails/'), 'thumbnail_prefix' => 'cms-thumb-', 'thumbnail_max_size' => '64', 'cache_url' => 'images/cache', 'cache_path' => ($this->targetDirs[2].'/application/../images/cache/')), $this->get('doctrine.orm.default_entity_manager'), $this->get('newscoop.cache'));
    }
    protected function getImage_RenditionService()
    {
        return $this->services['image.rendition'] = new \Newscoop\Image\RenditionService($this->get('doctrine.orm.default_entity_manager'), $this->get('image'));
    }
    protected function getImage_SearchService()
    {
        return $this->services['image.search'] = new \Newscoop\Image\ImageSearchService($this->get('doctrine.orm.default_entity_manager'));
    }
    protected function getImage_UpdateStorageService()
    {
        return $this->services['image.update_storage'] = new \Newscoop\Image\UpdateStorageService($this->get('doctrine.orm.default_entity_manager'), $this->get('storage'));
    }
    protected function getIndexClient_DefaultService()
    {
        return $this->services['index_client.default'] = new \Newscoop\Search\DefaultIndexClient($this);
    }
    protected function getIndexer_ArticleService()
    {
        return $this->services['indexer.article'] = new \Newscoop\Search\Indexer($this, $this->get('search.article'), $this->get('article.repository'), 'indexer.article');
    }
    protected function getIndexer_CommentService()
    {
        return $this->services['indexer.comment'] = new \Newscoop\Search\Indexer($this, $this->get('search.comment'), $this->get('comment.repository'), 'indexer.comment');
    }
    protected function getIndexer_UserService()
    {
        return $this->services['indexer.user'] = new \Newscoop\Search\Indexer($this, $this->get('search.user'), $this->get('user.repository'), 'indexer.user');
    }
    protected function getJmsSerializerService()
    {
        $a = new \JMS\Serializer\EventDispatcher\LazyEventDispatcher($this);
        $a->setListeners(array('serializer.pre_serialize' => array(0 => array(0 => array(0 => 'jms_serializer.doctrine_proxy_subscriber', 1 => 'onPreSerialize'), 1 => NULL, 2 => NULL))));
        return $this->services['jms_serializer'] = new \JMS\Serializer\Serializer($this->get('jms_serializer.metadata_factory'), $this->get('jms_serializer.handler_registry'), $this->get('jms_serializer.unserialize_object_constructor'), new \PhpCollection\Map(array('json' => $this->get('jms_serializer.json_serialization_visitor'), 'xml' => $this->get('jms_serializer.xml_serialization_visitor'), 'yml' => $this->get('jms_serializer.yaml_serialization_visitor'))), new \PhpCollection\Map(array('json' => $this->get('jms_serializer.json_deserialization_visitor'), 'xml' => $this->get('jms_serializer.xml_deserialization_visitor'))), $a);
    }
    protected function getJmsSerializer_ArrayCollectionHandlerService()
    {
        return $this->services['jms_serializer.array_collection_handler'] = new \JMS\Serializer\Handler\ArrayCollectionHandler();
    }
    protected function getJmsSerializer_ConstraintViolationHandlerService()
    {
        return $this->services['jms_serializer.constraint_violation_handler'] = new \JMS\Serializer\Handler\ConstraintViolationHandler();
    }
    protected function getJmsSerializer_DatetimeHandlerService()
    {
        return $this->services['jms_serializer.datetime_handler'] = new \JMS\Serializer\Handler\DateHandler('Y-m-d\\TH:i:sO', 'America/New_York', true);
    }
    protected function getJmsSerializer_DoctrineProxySubscriberService()
    {
        return $this->services['jms_serializer.doctrine_proxy_subscriber'] = new \JMS\Serializer\EventDispatcher\Subscriber\DoctrineProxySubscriber();
    }
    protected function getJmsSerializer_FormErrorHandlerService()
    {
        return $this->services['jms_serializer.form_error_handler'] = new \JMS\Serializer\Handler\FormErrorHandler($this->get('translator.default'));
    }
    protected function getJmsSerializer_HandlerRegistryService()
    {
        return $this->services['jms_serializer.handler_registry'] = new \JMS\Serializer\Handler\LazyHandlerRegistry($this, array(1 => array('author' => array('json' => array(0 => 'newscoop.gimme.serializer.article_author_handler', 1 => 'serializeToJson')), 'image_uri' => array('json' => array(0 => 'newscoop.gimme.serializer.image_image_uri_handler', 1 => 'serializeToJson')), 'items_link' => array('json' => array(0 => 'newscoop.gimme.serializer.package_items_link_handler', 1 => 'serializeToJson')), 'article_fields' => array('json' => array(0 => 'newscoop.gimme.serializer.article_fields_handler', 1 => 'serializeToJson')), 'article_translations' => array('json' => array(0 => 'newscoop.gimme.serializer.article_translations_handler', 1 => 'serializeToJson')), 'article_renditions' => array('json' => array(0 => 'newscoop.gimme.serializer.article_renditions_handler', 1 => 'serializeToJson')), 'comments_link' => array('json' => array(0 => 'newscoop.gimme.serializer.article_comments_link_handler', 1 => 'serializeToJson')), 'recommended_comments_count' => array('json' => array(0 => 'newscoop.gimme.serializer.article_recommended_comments_count_handler', 1 => 'getRecomendedCommentsCount')), 'comments_count' => array('json' => array(0 => 'newscoop.gimme.serializer.article_comments_count_handler', 1 => 'getCommentsCount')), 'article_url' => array('json' => array(0 => 'newscoop.gimme.serializer.article_url_handler', 1 => 'getArticleUrl')), 'topic_path' => array('json' => array(0 => 'newscoop.gimme.serializer.topic_path_handler', 1 => 'serializeToJson')), 'thumbnail_uri' => array('json' => array(0 => 'newscoop.gimme.serializer.image_thumbnail_uri_handler', 1 => 'serializeToJson')), 'DateTime' => array('json' => array(0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateTime'), 'xml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateTime'), 'yml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateTime')), 'DateInterval' => array('json' => array(0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateInterval'), 'xml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateInterval'), 'yml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateInterval')), 'ArrayCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection')), 'Doctrine\\Common\\Collections\\ArrayCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection')), 'Doctrine\\ORM\\PersistentCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection')), 'Doctrine\\ODM\\MongoDB\\PersistentCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection')), 'Doctrine\\ODM\\PHPCR\\PersistentCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection')), 'PhpCollection\\Sequence' => array('json' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'serializeSequence'), 'xml' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'serializeSequence'), 'yml' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'serializeSequence')), 'PhpCollection\\Map' => array('json' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'serializeMap'), 'xml' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'serializeMap'), 'yml' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'serializeMap')), 'Symfony\\Component\\Form\\Form' => array('xml' => array(0 => 'jms_serializer.form_error_handler', 1 => 'serializeFormToxml'), 'json' => array(0 => 'jms_serializer.form_error_handler', 1 => 'serializeFormTojson'), 'yml' => array(0 => 'jms_serializer.form_error_handler', 1 => 'serializeFormToyml')), 'Symfony\\Component\\Form\\FormError' => array('xml' => array(0 => 'jms_serializer.form_error_handler', 1 => 'serializeFormErrorToxml'), 'json' => array(0 => 'jms_serializer.form_error_handler', 1 => 'serializeFormErrorTojson'), 'yml' => array(0 => 'jms_serializer.form_error_handler', 1 => 'serializeFormErrorToyml')), 'Symfony\\Component\\Validator\\ConstraintViolationList' => array('xml' => array(0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeListToxml'), 'json' => array(0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeListTojson'), 'yml' => array(0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeListToyml')), 'Symfony\\Component\\Validator\\ConstraintViolation' => array('xml' => array(0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeViolationToxml'), 'json' => array(0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeViolationTojson'), 'yml' => array(0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeViolationToyml'))), 2 => array('DateTime' => array('json' => array(0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateTimeFromjson'), 'xml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateTimeFromxml'), 'yml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateTimeFromyml')), 'ArrayCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection')), 'Doctrine\\Common\\Collections\\ArrayCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection')), 'Doctrine\\ORM\\PersistentCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection')), 'Doctrine\\ODM\\MongoDB\\PersistentCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection')), 'Doctrine\\ODM\\PHPCR\\PersistentCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection')), 'PhpCollection\\Sequence' => array('json' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'deserializeSequence'), 'xml' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'deserializeSequence'), 'yml' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'deserializeSequence')), 'PhpCollection\\Map' => array('json' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'deserializeMap'), 'xml' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'deserializeMap'), 'yml' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'deserializeMap')))));
    }
    protected function getJmsSerializer_JsonDeserializationVisitorService()
    {
        return $this->services['jms_serializer.json_deserialization_visitor'] = new \JMS\Serializer\JsonDeserializationVisitor($this->get('jms_serializer.naming_strategy'), $this->get('jms_serializer.unserialize_object_constructor'));
    }
    protected function getJmsSerializer_JsonSerializationVisitorService()
    {
        $this->services['jms_serializer.json_serialization_visitor'] = $instance = new \JMS\Serializer\JsonSerializationVisitor($this->get('jms_serializer.naming_strategy'));
        $instance->setOptions(0);
        return $instance;
    }
    protected function getJmsSerializer_MetadataDriverService()
    {
        $a = new \Metadata\Driver\FileLocator(array('Symfony\\Bundle\\FrameworkBundle' => ($this->targetDirs[2].'/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/config/serializer'), 'Symfony\\Bundle\\SecurityBundle' => ($this->targetDirs[2].'/vendor/symfony/symfony/src/Symfony/Bundle/SecurityBundle/Resources/config/serializer'), 'Symfony\\Bundle\\TwigBundle' => ($this->targetDirs[2].'/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/config/serializer'), 'Symfony\\Bundle\\MonologBundle' => ($this->targetDirs[2].'/vendor/symfony/monolog-bundle/Symfony/Bundle/MonologBundle/Resources/config/serializer'), 'Symfony\\Bundle\\SwiftmailerBundle' => ($this->targetDirs[2].'/vendor/symfony/swiftmailer-bundle/Resources/config/serializer'), 'Symfony\\Bundle\\AsseticBundle' => ($this->targetDirs[2].'/vendor/symfony/assetic-bundle/Resources/config/serializer'), 'Doctrine\\Bundle\\DoctrineBundle' => ($this->targetDirs[2].'/vendor/doctrine/doctrine-bundle/Doctrine/Bundle/DoctrineBundle/Resources/config/serializer'), 'Sensio\\Bundle\\FrameworkExtraBundle' => ($this->targetDirs[2].'/vendor/sensio/framework-extra-bundle/Resources/config/serializer'), 'JMS\\SerializerBundle' => ($this->targetDirs[2].'/vendor/jms/serializer-bundle/JMS/SerializerBundle/Resources/config/serializer'), 'FOS\\RestBundle' => ($this->targetDirs[2].'/vendor/friendsofsymfony/rest-bundle/FOS/RestBundle/Resources/config/serializer'), 'Newscoop\\GimmeBundle' => ($this->targetDirs[2].'/src/Newscoop/GimmeBundle/Resources/config/serializer'), 'Knp\\Bundle\\PaginatorBundle' => ($this->targetDirs[2].'/vendor/knplabs/knp-paginator-bundle/Knp/Bundle/PaginatorBundle/Resources/config/serializer'), 'Knp\\Bundle\\MenuBundle' => ($this->targetDirs[2].'/vendor/knplabs/knp-menu-bundle/Resources/config/serializer'), 'EWZ\\Bundle\\RecaptchaBundle' => ($this->targetDirs[2].'/vendor/newscoop/recaptcha-bundle/EWZ/Bundle/RecaptchaBundle/Resources/config/serializer'), 'FOS\\JsRoutingBundle' => ($this->targetDirs[2].'/vendor/friendsofsymfony/jsrouting-bundle/Resources/config/serializer'), 'Bazinga\\Bundle\\JsTranslationBundle' => ($this->targetDirs[2].'/vendor/willdurand/js-translation-bundle/Bazinga/Bundle/JsTranslationBundle/Resources/config/serializer'), 'FOS\\OAuthServerBundle' => ($this->targetDirs[2].'/vendor/friendsofsymfony/oauth-server-bundle/FOS/OAuthServerBundle/Resources/config/serializer'), 'Nelmio\\ApiDocBundle' => ($this->targetDirs[2].'/vendor/nelmio/api-doc-bundle/Nelmio/ApiDocBundle/Resources/config/serializer'), 'Newscoop\\ZendBridgeBundle' => ($this->targetDirs[2].'/src/Newscoop/ZendBridgeBundle/Resources/config/serializer'), 'Newscoop\\NewscoopBundle' => ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/config/serializer'), 'Newscoop\\CommunityTickerBundle' => ($this->targetDirs[2].'/src/Newscoop/CommunityTickerBundle/Resources/config/serializer'), 'Newscoop\\ArticlesBundle' => ($this->targetDirs[2].'/src/Newscoop/ArticlesBundle/Resources/config/serializer'), 'Stof\\DoctrineExtensionsBundle' => ($this->targetDirs[2].'/vendor/stof/doctrine-extensions-bundle/Resources/config/serializer'), 'Sensio\\Bundle\\GeneratorBundle' => ($this->targetDirs[2].'/vendor/sensio/generator-bundle/Sensio/Bundle/GeneratorBundle/Resources/config/serializer'), 'Newscoop\\PluginGeneratorBundle' => ($this->targetDirs[2].'/src/Newscoop/PluginGeneratorBundle/Resources/config/serializer'), 'Newscoop\\Entity' => ($this->targetDirs[2].'/src/Newscoop/GimmeBundle/Resources/config/serializer/newscoop'), 'Newscoop\\NewscoopBundle\\Entity' => ($this->targetDirs[2].'/src/Newscoop/GimmeBundle/Resources/config/serializer/newscoop'), 'Newscoop\\Entity\\Comment' => ($this->targetDirs[2].'/src/Newscoop/GimmeBundle/Resources/config/serializer/newscoop'), 'Newscoop\\Package' => ($this->targetDirs[2].'/src/Newscoop/GimmeBundle/Resources/config/serializer/newscoop'), 'Newscoop\\Image' => ($this->targetDirs[2].'/src/Newscoop/GimmeBundle/Resources/config/serializer/newscoop'), 'Newscoop\\Entity\\Snippet' => ($this->targetDirs[2].'/src/Newscoop/GimmeBundle/Resources/config/serializer/newscoop'), 'Newscoop\\Entity\\Snippet\\SnippetTemplate' => ($this->targetDirs[2].'/src/Newscoop/GimmeBundle/Resources/config/serializer/newscoop'), 'Newscoop\\ArticlesBundle\\Entity' => ($this->targetDirs[2].'/src/Newscoop/GimmeBundle/Resources/config/serializer/newscoop')));
        return $this->services['jms_serializer.metadata_driver'] = new \JMS\Serializer\Metadata\Driver\DoctrineTypeDriver(new \Metadata\Driver\DriverChain(array(0 => new \JMS\Serializer\Metadata\Driver\YamlDriver($a), 1 => new \JMS\Serializer\Metadata\Driver\XmlDriver($a), 2 => new \JMS\Serializer\Metadata\Driver\PhpDriver($a), 3 => new \JMS\Serializer\Metadata\Driver\AnnotationDriver($this->get('annotation_reader')))), $this->get('doctrine'));
    }
    protected function getJmsSerializer_NamingStrategyService()
    {
        return $this->services['jms_serializer.naming_strategy'] = new \JMS\Serializer\Naming\CacheNamingStrategy(new \JMS\Serializer\Naming\SerializedNameAnnotationStrategy(new \JMS\Serializer\Naming\CamelCaseNamingStrategy('_', true)));
    }
    protected function getJmsSerializer_ObjectConstructorService()
    {
        return $this->services['jms_serializer.object_constructor'] = new \JMS\Serializer\Construction\DoctrineObjectConstructor($this->get('doctrine'), $this->get('jms_serializer.unserialize_object_constructor'));
    }
    protected function getJmsSerializer_PhpCollectionHandlerService()
    {
        return $this->services['jms_serializer.php_collection_handler'] = new \JMS\Serializer\Handler\PhpCollectionHandler();
    }
    protected function getJmsSerializer_Templating_Helper_SerializerService()
    {
        return $this->services['jms_serializer.templating.helper.serializer'] = new \JMS\SerializerBundle\Templating\SerializerHelper($this->get('jms_serializer'));
    }
    protected function getJmsSerializer_XmlDeserializationVisitorService()
    {
        $this->services['jms_serializer.xml_deserialization_visitor'] = $instance = new \JMS\Serializer\XmlDeserializationVisitor($this->get('jms_serializer.naming_strategy'), $this->get('jms_serializer.unserialize_object_constructor'));
        $instance->setDoctypeWhitelist(array());
        return $instance;
    }
    protected function getJmsSerializer_XmlSerializationVisitorService()
    {
        return $this->services['jms_serializer.xml_serialization_visitor'] = new \JMS\Serializer\XmlSerializationVisitor($this->get('jms_serializer.naming_strategy'));
    }
    protected function getJmsSerializer_YamlSerializationVisitorService()
    {
        return $this->services['jms_serializer.yaml_serialization_visitor'] = new \JMS\Serializer\YamlSerializationVisitor($this->get('jms_serializer.naming_strategy'));
    }
    protected function getKernelService()
    {
        throw new RuntimeException('You have requested a synthetic service ("kernel"). The DIC does not know how to construct this service.');
    }
    protected function getKnpMenu_FactoryService()
    {
        $this->services['knp_menu.factory'] = $instance = new \Knp\Menu\MenuFactory();
        $instance->addExtension(new \Knp\Menu\Integration\Symfony\RoutingExtension($this->get('router')), 0);
        return $instance;
    }
    protected function getKnpMenu_Listener_VotersService()
    {
        $this->services['knp_menu.listener.voters'] = $instance = new \Knp\Bundle\MenuBundle\EventListener\VoterInitializerListener();
        $instance->addVoter($this->get('knp_menu.voter.router'));
        return $instance;
    }
    protected function getKnpMenu_MatcherService()
    {
        $this->services['knp_menu.matcher'] = $instance = new \Knp\Menu\Matcher\Matcher();
        $instance->addVoter($this->get('knp_menu.voter.router'));
        return $instance;
    }
    protected function getKnpMenu_MenuProviderService()
    {
        return $this->services['knp_menu.menu_provider'] = new \Knp\Menu\Provider\ChainProvider(array(0 => new \Knp\Bundle\MenuBundle\Provider\ContainerAwareProvider($this, array('main' => 'newscoop_newscoop.menu.main', 'main_modern' => 'newscoop_newscoop.menu.main_modern', 'breadcrumb' => 'newscoop_newscoop.menu.breadcrumb')), 1 => new \Knp\Bundle\MenuBundle\Provider\BuilderAliasProvider($this->get('kernel'), $this, $this->get('knp_menu.factory'))));
    }
    protected function getKnpMenu_Renderer_ListService()
    {
        return $this->services['knp_menu.renderer.list'] = new \Knp\Menu\Renderer\ListRenderer($this->get('knp_menu.matcher'), array(), 'UTF-8');
    }
    protected function getKnpMenu_Renderer_TwigService()
    {
        return $this->services['knp_menu.renderer.twig'] = new \Knp\Menu\Renderer\TwigRenderer($this->get('twig'), 'knp_menu.html.twig', $this->get('knp_menu.matcher'), array());
    }
    protected function getKnpMenu_RendererProviderService()
    {
        return $this->services['knp_menu.renderer_provider'] = new \Knp\Bundle\MenuBundle\Renderer\ContainerAwareProvider($this, 'twig', array('list' => 'knp_menu.renderer.list', 'twig' => 'knp_menu.renderer.twig'));
    }
    protected function getKnpMenu_Voter_RouterService()
    {
        return $this->services['knp_menu.voter.router'] = new \Knp\Menu\Matcher\Voter\RouteVoter();
    }
    protected function getKnpPaginatorService()
    {
        $this->services['knp_paginator'] = $instance = new \Knp\Component\Pager\Paginator($this->get('event_dispatcher'));
        $instance->setDefaultPaginatorOptions(array('pageParameterName' => 'knp_page', 'sortFieldParameterName' => 'knp_sort', 'sortDirectionParameterName' => 'knp_direction', 'filterFieldParameterName' => 'filterField', 'filterValueParameterName' => 'filterValue', 'distinct' => true));
        return $instance;
    }
    protected function getKnpPaginator_Helper_ProcessorService()
    {
        return $this->services['knp_paginator.helper.processor'] = new \Knp\Bundle\PaginatorBundle\Helper\Processor($this->get('templating.helper.router'), $this->get('translator.default'));
    }
    protected function getKnpPaginator_Subscriber_FiltrationService()
    {
        return $this->services['knp_paginator.subscriber.filtration'] = new \Knp\Component\Pager\Event\Subscriber\Filtration\FiltrationSubscriber();
    }
    protected function getKnpPaginator_Subscriber_PaginateService()
    {
        return $this->services['knp_paginator.subscriber.paginate'] = new \Knp\Component\Pager\Event\Subscriber\Paginate\PaginationSubscriber();
    }
    protected function getKnpPaginator_Subscriber_SlidingPaginationService()
    {
        return $this->services['knp_paginator.subscriber.sliding_pagination'] = new \Knp\Bundle\PaginatorBundle\Subscriber\SlidingPaginationSubscriber(array('defaultPaginationTemplate' => 'KnpPaginatorBundle:Pagination:sliding.html.twig', 'defaultSortableTemplate' => 'KnpPaginatorBundle:Pagination:sortable_link.html.twig', 'defaultFiltrationTemplate' => 'KnpPaginatorBundle:Pagination:filtration.html.twig', 'defaultPageRange' => 5));
    }
    protected function getKnpPaginator_Subscriber_SortableService()
    {
        return $this->services['knp_paginator.subscriber.sortable'] = new \Knp\Component\Pager\Event\Subscriber\Sortable\SortableSubscriber();
    }
    protected function getKnpPaginator_Templating_Helper_PaginationService()
    {
        return $this->services['knp_paginator.templating.helper.pagination'] = new \Knp\Bundle\PaginatorBundle\Templating\PaginationHelper($this->get('knp_paginator.helper.processor'), $this->get('templating.engine.php'));
    }
    protected function getKnpPaginator_Twig_Extension_PaginationService()
    {
        return $this->services['knp_paginator.twig.extension.pagination'] = new \Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension($this->get('knp_paginator.helper.processor'));
    }
    protected function getLocaleListenerService()
    {
        return $this->services['locale_listener'] = new \Symfony\Component\HttpKernel\EventListener\LocaleListener('en', $this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('request_stack'));
    }
    protected function getLoggerService()
    {
        $this->services['logger'] = $instance = new \Symfony\Bridge\Monolog\Logger('app');
        $instance->pushHandler($this->get('monolog.handler.main'));
        return $instance;
    }
    protected function getMonolog_Handler_MainService()
    {
        return $this->services['monolog.handler.main'] = new \Monolog\Handler\FingersCrossedHandler($this->get('monolog.handler.nested'), 400, 0, true, true);
    }
    protected function getMonolog_Handler_NestedService()
    {
        return $this->services['monolog.handler.nested'] = new \Monolog\Handler\StreamHandler(($this->targetDirs[2].'/log/prod.log'), 100, true);
    }
    protected function getMonolog_Handler_SentryService()
    {
        return $this->services['monolog.handler.sentry'] = new \Monolog\Handler\RavenHandler(new \Raven_Client('http://6948f4720ffe4956b25df0fe720da09e:085cd9f5324c4e65abdd55482ca7c5cc@sentry.sourcefabric.org/5'), 250, true);
    }
    protected function getMonolog_Logger_AsseticService()
    {
        $this->services['monolog.logger.assetic'] = $instance = new \Symfony\Bridge\Monolog\Logger('assetic');
        $instance->pushHandler($this->get('monolog.handler.main'));
        return $instance;
    }
    protected function getMonolog_Logger_DoctrineService()
    {
        $this->services['monolog.logger.doctrine'] = $instance = new \Symfony\Bridge\Monolog\Logger('doctrine');
        $instance->pushHandler($this->get('monolog.handler.main'));
        return $instance;
    }
    protected function getMonolog_Logger_EmergencyService()
    {
        $this->services['monolog.logger.emergency'] = $instance = new \Symfony\Bridge\Monolog\Logger('emergency');
        $instance->pushHandler($this->get('monolog.handler.main'));
        return $instance;
    }
    protected function getMonolog_Logger_RequestService()
    {
        $this->services['monolog.logger.request'] = $instance = new \Symfony\Bridge\Monolog\Logger('request');
        $instance->pushHandler($this->get('monolog.handler.main'));
        return $instance;
    }
    protected function getMonolog_Logger_RouterService()
    {
        $this->services['monolog.logger.router'] = $instance = new \Symfony\Bridge\Monolog\Logger('router');
        $instance->pushHandler($this->get('monolog.handler.main'));
        return $instance;
    }
    protected function getMonolog_Logger_SecurityService()
    {
        $this->services['monolog.logger.security'] = $instance = new \Symfony\Bridge\Monolog\Logger('security');
        $instance->pushHandler($this->get('monolog.handler.main'));
        return $instance;
    }
    protected function getMonolog_Logger_SentryService()
    {
        $a = $this->get('monolog.handler.sentry');
        $this->services['monolog.logger.sentry'] = $instance = new \Symfony\Bridge\Monolog\Logger('sentry');
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($a);
        $instance->pushHandler($a);
        return $instance;
    }
    protected function getNelmioApiDoc_DocCommentExtractorService()
    {
        return $this->services['nelmio_api_doc.doc_comment_extractor'] = new \Nelmio\ApiDocBundle\Util\DocCommentExtractor();
    }
    protected function getNelmioApiDoc_Extractor_ApiDocExtractorService()
    {
        $a = $this->get('nelmio_api_doc.doc_comment_extractor');
        $this->services['nelmio_api_doc.extractor.api_doc_extractor'] = $instance = new \Nelmio\ApiDocBundle\Extractor\ApiDocExtractor($this, $this->get('router'), $this->get('annotation_reader'), $a, array(0 => new \Nelmio\ApiDocBundle\Extractor\Handler\FosRestHandler(), 1 => new \Nelmio\ApiDocBundle\Extractor\Handler\JmsSecurityExtraHandler(), 2 => new \Nelmio\ApiDocBundle\Extractor\Handler\SensioFrameworkExtraHandler(), 3 => new \Nelmio\ApiDocBundle\Extractor\Handler\PhpDocHandler($a)));
        $instance->addParser($this->get('nelmio_api_doc.parser.collection_parser'));
        $instance->addParser($this->get('nelmio_api_doc.parser.form_errors_parser'));
        $instance->addParser($this->get('nelmio_api_doc.parser.form_type_parser'));
        $instance->addParser($this->get('nelmio_api_doc.parser.validation_parser'));
        $instance->addParser($this->get('nelmio_api_doc.parser.jms_metadata_parser'));
        return $instance;
    }
    protected function getNelmioApiDoc_Form_Extension_DescriptionFormTypeExtensionService()
    {
        return $this->services['nelmio_api_doc.form.extension.description_form_type_extension'] = new \Nelmio\ApiDocBundle\Form\Extension\DescriptionFormTypeExtension();
    }
    protected function getNelmioApiDoc_Formatter_HtmlFormatterService()
    {
        $this->services['nelmio_api_doc.formatter.html_formatter'] = $instance = new \Nelmio\ApiDocBundle\Formatter\HtmlFormatter();
        $instance->setTemplatingEngine($this->get('templating'));
        $instance->setMotdTemplate('NelmioApiDocBundle::Components/motd.html.twig');
        $instance->setApiName('Newscoop REST API documentation');
        $instance->setEnableSandbox(true);
        $instance->setEndpoint(NULL);
        $instance->setRequestFormatMethod('format_param');
        $instance->setRequestFormats(array('json' => 'application/json', 'xml' => 'application/xml'));
        $instance->setDefaultRequestFormat('json');
        $instance->setAcceptType(NULL);
        $instance->setBodyFormats(array(0 => 'form', 1 => 'json'));
        $instance->setDefaultBodyFormat('form');
        $instance->setAuthentication(NULL);
        $instance->setDefaultSectionsOpened(true);
        return $instance;
    }
    protected function getNelmioApiDoc_Formatter_MarkdownFormatterService()
    {
        return $this->services['nelmio_api_doc.formatter.markdown_formatter'] = new \Nelmio\ApiDocBundle\Formatter\MarkdownFormatter();
    }
    protected function getNelmioApiDoc_Formatter_SimpleFormatterService()
    {
        return $this->services['nelmio_api_doc.formatter.simple_formatter'] = new \Nelmio\ApiDocBundle\Formatter\SimpleFormatter();
    }
    protected function getNelmioApiDoc_Formatter_SwaggerFormatterService()
    {
        $this->services['nelmio_api_doc.formatter.swagger_formatter'] = $instance = new \Nelmio\ApiDocBundle\Formatter\SwaggerFormatter('dot_notation');
        $instance->setBasePath('/api');
        $instance->setApiVersion('0.1');
        $instance->setSwaggerVersion('1.2');
        $instance->setInfo(array('title' => 'Symfony2', 'description' => 'My awesome Symfony2 app!', 'TermsOfServiceUrl' => NULL, 'contact' => NULL, 'license' => NULL, 'licenseUrl' => NULL));
        return $instance;
    }
    protected function getNelmioApiDoc_Parser_CollectionParserService()
    {
        return $this->services['nelmio_api_doc.parser.collection_parser'] = new \Nelmio\ApiDocBundle\Parser\CollectionParser();
    }
    protected function getNelmioApiDoc_Parser_FormErrorsParserService()
    {
        return $this->services['nelmio_api_doc.parser.form_errors_parser'] = new \Nelmio\ApiDocBundle\Parser\FormErrorsParser();
    }
    protected function getNelmioApiDoc_Parser_FormTypeParserService()
    {
        return $this->services['nelmio_api_doc.parser.form_type_parser'] = new \Nelmio\ApiDocBundle\Parser\FormTypeParser($this->get('form.factory'));
    }
    protected function getNelmioApiDoc_Parser_JmsMetadataParserService()
    {
        return $this->services['nelmio_api_doc.parser.jms_metadata_parser'] = new \Nelmio\ApiDocBundle\Parser\JmsMetadataParser($this->get('jms_serializer.metadata_factory'), $this->get('jms_serializer.naming_strategy'), $this->get('nelmio_api_doc.doc_comment_extractor'));
    }
    protected function getNelmioApiDoc_Parser_ValidationParserService()
    {
        return $this->services['nelmio_api_doc.parser.validation_parser'] = new \Nelmio\ApiDocBundle\Parser\ValidationParser($this->get('validator'));
    }
    protected function getNelmioApiDoc_Twig_Extension_ExtraMarkdownService()
    {
        return $this->services['nelmio_api_doc.twig.extension.extra_markdown'] = new \Nelmio\ApiDocBundle\Twig\Extension\MarkdownExtension();
    }
    protected function getNewscoop_CacheService()
    {
        return $this->services['newscoop.cache'] = new \Newscoop\Services\CacheService($this->get('preferences'));
    }
    protected function getNewscoop_Criteria_CommunitytickerService()
    {
        return $this->services['newscoop.criteria.communityticker'] = new \Newscoop\CommunityTickerBundle\TemplateList\ListCriteria();
    }
    protected function getNewscoop_Criteria_UsersService()
    {
        return $this->services['newscoop.criteria.users'] = new \Newscoop\User\UserCriteria();
    }
    protected function getNewscoop_EditorService()
    {
        return $this->services['newscoop.editor'] = new \Newscoop\Services\EditorService($this->get('event_dispatcher'), $this->get('doctrine.orm.default_entity_manager'));
    }
    protected function getNewscoop_EditorialCommentsService()
    {
        return $this->services['newscoop.editorial_comments'] = new \Newscoop\ArticlesBundle\Services\EditorialCommentsService($this->get('doctrine.orm.default_entity_manager'));
    }
    protected function getNewscoop_FilesystemService()
    {
        return $this->services['newscoop.filesystem'] = new \Newscoop\Services\FilesystemService($this->get('doctrine.orm.default_entity_manager'));
    }
    protected function getNewscoop_Gimme_Authorize_FormService()
    {
        return $this->services['newscoop.gimme.authorize.form'] = $this->get('form.factory')->createNamed('newscoop_gimme_oauth_authorize', $this->get('newscoop.gimme.authorize.form_type'));
    }
    protected function getNewscoop_Gimme_Authorize_FormHandlerService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('newscoop.gimme.authorize.form_handler', 'request');
        }
        return $this->services['newscoop.gimme.authorize.form_handler'] = $this->scopedServices['request']['newscoop.gimme.authorize.form_handler'] = new \Newscoop\GimmeBundle\Form\Handler\AuthorizeFormHandler($this->get('newscoop.gimme.authorize.form'), $this->get('request'), $this->get('security.context'), $this->get('fos_oauth_server.server'));
    }
    protected function getNewscoop_Gimme_Authorize_FormTypeService()
    {
        return $this->services['newscoop.gimme.authorize.form_type'] = new \Newscoop\GimmeBundle\Form\Type\AuthorizeFormType();
    }
    protected function getNewscoop_Gimme_Listener_AllowOriginService()
    {
        return $this->services['newscoop.gimme.listener.allow_origin'] = new \Newscoop\GimmeBundle\EventListener\AllowOriginListener($this);
    }
    protected function getNewscoop_Gimme_Listener_FormatJsonService()
    {
        return $this->services['newscoop.gimme.listener.format_json'] = new \Newscoop\GimmeBundle\EventListener\FormatJsonResponseListener();
    }
    protected function getNewscoop_Gimme_Listener_LinkRequestService()
    {
        return $this->services['newscoop.gimme.listener.link_request'] = new \Newscoop\GimmeBundle\EventListener\LinkRequestListener($this->get('controller_resolver'), $this->get('router'));
    }
    protected function getNewscoop_Gimme_Listener_PublicResourcesService()
    {
        return $this->services['newscoop.gimme.listener.public_resources'] = new \Newscoop\GimmeBundle\EventListener\PublicResourcesListener($this);
    }
    protected function getNewscoop_Gimme_OauthEventListenerService()
    {
        return $this->services['newscoop.gimme.oauth_event_listener'] = new \Newscoop\GimmeBundle\EventListener\OAuthEventListener($this->get('doctrine.orm.default_entity_manager'));
    }
    protected function getNewscoop_Gimme_Serializer_ArticleAuthorHandlerService()
    {
        return $this->services['newscoop.gimme.serializer.article_author_handler'] = new \Newscoop\GimmeBundle\Serializer\Article\AuthorHandler($this->get('router'));
    }
    protected function getNewscoop_Gimme_Serializer_ArticleCommentsCountHandlerService()
    {
        return $this->services['newscoop.gimme.serializer.article_comments_count_handler'] = new \Newscoop\GimmeBundle\Serializer\Article\CommentsCountHandler($this->get('comment'));
    }
    protected function getNewscoop_Gimme_Serializer_ArticleCommentsLinkHandlerService()
    {
        return $this->services['newscoop.gimme.serializer.article_comments_link_handler'] = new \Newscoop\GimmeBundle\Serializer\Article\CommentsLinkHandler($this->get('router'));
    }
    protected function getNewscoop_Gimme_Serializer_ArticleFieldsHandlerService()
    {
        return $this->services['newscoop.gimme.serializer.article_fields_handler'] = new \Newscoop\GimmeBundle\Serializer\Article\FieldsHandler();
    }
    protected function getNewscoop_Gimme_Serializer_ArticleRecommendedCommentsCountHandlerService()
    {
        return $this->services['newscoop.gimme.serializer.article_recommended_comments_count_handler'] = new \Newscoop\GimmeBundle\Serializer\Article\CommentsCountHandler($this->get('comment'));
    }
    protected function getNewscoop_Gimme_Serializer_ArticleRenditionsHandlerService()
    {
        return $this->services['newscoop.gimme.serializer.article_renditions_handler'] = new \Newscoop\GimmeBundle\Serializer\Article\RenditionsHandler($this->get('image'), $this->get('zend_router'), $this->get('newscoop_newscoop.publication_service'), $this->get('image.rendition'));
    }
    protected function getNewscoop_Gimme_Serializer_ArticleTranslationsHandlerService()
    {
        return $this->services['newscoop.gimme.serializer.article_translations_handler'] = new \Newscoop\GimmeBundle\Serializer\Article\TranslationsHandler($this->get('doctrine.orm.default_entity_manager'), $this->get('router'));
    }
    protected function getNewscoop_Gimme_Serializer_ArticleUrlHandlerService()
    {
        return $this->services['newscoop.gimme.serializer.article_url_handler'] = new \Newscoop\GimmeBundle\Serializer\Article\UrlHandler($this->get('article.link'));
    }
    protected function getNewscoop_Gimme_Serializer_ImageImageUriHandlerService()
    {
        return $this->services['newscoop.gimme.serializer.image_image_uri_handler'] = new \Newscoop\GimmeBundle\Serializer\Image\ImageUriHandler($this->get('image'), $this->get('zend_router'), $this->get('article.link'));
    }
    protected function getNewscoop_Gimme_Serializer_ImageThumbnailUriHandlerService()
    {
        return $this->services['newscoop.gimme.serializer.image_thumbnail_uri_handler'] = new \Newscoop\GimmeBundle\Serializer\Image\ThumbnailUriHandler($this->get('article.link'));
    }
    protected function getNewscoop_Gimme_Serializer_PackageItemsLinkHandlerService()
    {
        return $this->services['newscoop.gimme.serializer.package_items_link_handler'] = new \Newscoop\GimmeBundle\Serializer\Package\ItemsLinkHandler($this->get('router'));
    }
    protected function getNewscoop_Gimme_Serializer_TopicPathHandlerService()
    {
        return $this->services['newscoop.gimme.serializer.topic_path_handler'] = new \Newscoop\GimmeBundle\Serializer\Topic\TopicPathHandler($this->get('doctrine.orm.default_entity_manager'));
    }
    protected function getNewscoop_InputManipulatorService()
    {
        return $this->services['newscoop.input_manipulator'] = new \Newscoop\Services\InputManipulator();
    }
    protected function getNewscoop_Listpaginator_ServiceService()
    {
        return $this->services['newscoop.listpaginator.service'] = new \Newscoop\Services\ListPaginatorService();
    }
    protected function getNewscoop_Paginator_PaginationExtraDataSubscriberService()
    {
        return $this->services['newscoop.paginator.pagination_extra_data_subscriber'] = new \Newscoop\GimmeBundle\EventListener\PaginationExtraDataSubscriber($this->get('newscoop.paginator.paginator_service'));
    }
    protected function getNewscoop_Paginator_PaginationListenerService()
    {
        return $this->services['newscoop.paginator.pagination_listener'] = new \Newscoop\GimmeBundle\EventListener\PaginationListener($this->get('newscoop.paginator.paginator_service'));
    }
    protected function getNewscoop_Paginator_PaginatorServiceService()
    {
        return $this->services['newscoop.paginator.paginator_service'] = new \Newscoop\Gimme\PaginatorService($this->get('knp_paginator'), $this->get('router'));
    }
    protected function getNewscoop_Paginator_QuerySubscriberService()
    {
        return $this->services['newscoop.paginator.query_subscriber'] = new \Newscoop\GimmeBundle\EventListener\QuerySubscriber($this->get('newscoop.paginator.paginator_service'));
    }
    protected function getNewscoop_Placeholders_ServiceService()
    {
        return $this->services['newscoop.placeholders.service'] = new \Newscoop\Services\PlaceholdersService();
    }
    protected function getNewscoop_Plugins_ManagerService()
    {
        return $this->services['newscoop.plugins.manager'] = new \Newscoop\Services\Plugins\ManagerService($this->get('doctrine.orm.default_entity_manager'), $this->get('event_dispatcher'), $this->get('newscoop.plugins.service'), $this->get('logger'), array('internal_memory_limit' => ''));
    }
    protected function getNewscoop_Plugins_ServiceService()
    {
        return $this->services['newscoop.plugins.service'] = new \Newscoop\Services\Plugins\PluginsService($this->get('event_dispatcher'), $this->get('doctrine.orm.default_entity_manager'));
    }
    protected function getNewscoop_SchedulerService()
    {
        return $this->services['newscoop.scheduler'] = new \Newscoop\Services\SchedulerService($this->get('doctrine.orm.default_entity_manager'), array('environment' => 'cli'));
    }
    protected function getNewscoop_Serializer_SerializerSubscriberService()
    {
        return $this->services['newscoop.serializer.serializer_subscriber'] = new \Newscoop\GimmeBundle\EventListener\SerializerSubscriber($this);
    }
    protected function getNewscoop_TemplateLists_CommunitytickerService()
    {
        return $this->services['newscoop.template_lists.communityticker'] = new \Newscoop\CommunityTickerBundle\TemplateList\CommunityFeedsList($this->get('newscoop.criteria.communityticker'));
    }
    protected function getNewscoop_TemplateLists_UsersService()
    {
        return $this->services['newscoop.template_lists.users'] = new \Newscoop\TemplateList\UsersList($this->get('newscoop.criteria.users'));
    }
    protected function getNewscoop_Templates_ServiceService()
    {
        return $this->services['newscoop.templates.service'] = new \Newscoop\Services\TemplatesService($this->get('newscoop_newscoop.themes_service'), $this->get('newscoop_newscoop.publication_service'));
    }
    protected function getNewscoop_Zendbridge_ZendapplicationListenerService()
    {
        return $this->services['newscoop.zendbridge.zendapplication_listener'] = new \Newscoop\ZendBridgeBundle\EventListener\ZendApplicationListener($this);
    }
    protected function getNewscoopNewscoop_ArticleServiceService()
    {
        return $this->services['newscoop_newscoop.article_service'] = new \Newscoop\Services\ArticleService($this->get('doctrine.orm.default_entity_manager'));
    }
    protected function getNewscoopNewscoop_Criteria_UsersService()
    {
        return $this->services['newscoop_newscoop.criteria.users'] = new \Newscoop\User\UserCriteria();
    }
    protected function getNewscoopNewscoop_Doctrine_EventDispatcherProxyService()
    {
        return $this->services['newscoop_newscoop.doctrine.event_dispatcher_proxy'] = new \Newscoop\Doctrine\EventDispatcherProxy($this->get('event_dispatcher'));
    }
    protected function getNewscoopNewscoop_IssueServiceService()
    {
        return $this->services['newscoop_newscoop.issue_service'] = new \Newscoop\Services\IssueService($this->get('doctrine.orm.default_entity_manager'), $this->get('newscoop_newscoop.publication_service'), $this->get('newscoop.cache'));
    }
    protected function getNewscoopNewscoop_ListObjects_ListenerService()
    {
        return $this->services['newscoop_newscoop.list_objects.listener'] = new \Newscoop\NewscoopBundle\EventListener\ListObjectsListener();
    }
    protected function getNewscoopNewscoop_Listener_AccessDeniedService()
    {
        return $this->services['newscoop_newscoop.listener.access_denied'] = new \Newscoop\NewscoopBundle\EventListener\AccessDeniedExceptionListener($this);
    }
    protected function getNewscoopNewscoop_Listener_ArticleService()
    {
        return $this->services['newscoop_newscoop.listener.article'] = new \Newscoop\NewscoopBundle\EventListener\ArticleListener($this->get('newscoop_newscoop.article_service'));
    }
    protected function getNewscoopNewscoop_Listener_IssueService()
    {
        return $this->services['newscoop_newscoop.listener.issue'] = new \Newscoop\NewscoopBundle\EventListener\IssueListener($this->get('newscoop_newscoop.issue_service'));
    }
    protected function getNewscoopNewscoop_Listener_LocaleListenerService()
    {
        return $this->services['newscoop_newscoop.listener.locale_listener'] = new \Newscoop\NewscoopBundle\EventListener\LocaleListener($this->get('newscoop.cache'), $this->get('doctrine.orm.default_entity_manager'));
    }
    protected function getNewscoopNewscoop_Listener_NoCacheListenerService()
    {
        return $this->services['newscoop_newscoop.listener.no_cache_listener'] = new \Newscoop\NewscoopBundle\EventListener\NoCacheListener();
    }
    protected function getNewscoopNewscoop_Listener_PublicationService()
    {
        return $this->services['newscoop_newscoop.listener.publication'] = new \Newscoop\NewscoopBundle\EventListener\PublicationListener($this->get('newscoop_newscoop.publication_service'));
    }
    protected function getNewscoopNewscoop_Listener_RouteListenerService()
    {
        return $this->services['newscoop_newscoop.listener.route_listener'] = new \Newscoop\NewscoopBundle\EventListener\RouteListener($this->get('newscoop.listpaginator.service'));
    }
    protected function getNewscoopNewscoop_Listener_UseripService()
    {
        return $this->services['newscoop_newscoop.listener.userip'] = new \Newscoop\NewscoopBundle\EventListener\UserIpListener($this->get('user'));
    }
    protected function getNewscoopNewscoop_Menu_BreadcrumbService()
    {
        return $this->services['newscoop_newscoop.menu.breadcrumb'] = $this->get('newscoop_newscoop.menu_builder')->mainBreadcrumb();
    }
    protected function getNewscoopNewscoop_Menu_MainService()
    {
        return $this->services['newscoop_newscoop.menu.main'] = $this->get('newscoop_newscoop.menu_builder')->mainMenu();
    }
    protected function getNewscoopNewscoop_Menu_MainModernService()
    {
        return $this->services['newscoop_newscoop.menu.main_modern'] = $this->get('newscoop_newscoop.menu_builder')->mainMenu(true);
    }
    protected function getNewscoopNewscoop_MenuBuilderService()
    {
        return $this->services['newscoop_newscoop.menu_builder'] = new \Newscoop\NewscoopBundle\Menu\Builder($this->get('knp_menu.factory'), $this);
    }
    protected function getNewscoopNewscoop_PasswordEncoderService()
    {
        return $this->services['newscoop_newscoop.password_encoder'] = new \Newscoop\NewscoopBundle\Security\Encoder\NewscoopPasswordEncoder();
    }
    protected function getNewscoopNewscoop_PublicationServiceService()
    {
        return $this->services['newscoop_newscoop.publication_service'] = new \Newscoop\Services\PublicationService($this->get('doctrine.orm.default_entity_manager'), $this->get('newscoop.cache'));
    }
    protected function getNewscoopNewscoop_Routing_Loader_PluginsService()
    {
        return $this->services['newscoop_newscoop.routing.loader.plugins'] = new \Newscoop\NewscoopBundle\Routing\PluginsLoader($this->get('newscoop.plugins.manager'), $this);
    }
    protected function getNewscoopNewscoop_Security_Authentication_Frontend_SuccessHandlerService()
    {
        return $this->services['newscoop_newscoop.security.authentication.frontend.success_handler'] = new \Newscoop\NewscoopBundle\Security\Http\Authentication\AuthenticationFrontendSuccessHandler($this->get('security.http_utils'), array(), $this->get('auth.adapter'), $this->get('user'));
    }
    protected function getNewscoopNewscoop_Security_Oauth_Logout_SuccessHandlerService()
    {
        return $this->services['newscoop_newscoop.security.oauth.logout.success_handler'] = new \Newscoop\NewscoopBundle\Security\Http\Authentication\OAuthLogoutSuccessHandler($this->get('security.http_utils'), $this->get('security.context'));
    }
    protected function getNewscoopNewscoop_Session_StorageService()
    {
        return $this->services['newscoop_newscoop.session.storage'] = new \Newscoop\NewscoopBundle\Session\Storage(array('gc_probability' => 1), $this->get('preferences'));
    }
    protected function getNewscoopNewscoop_SimpleUserProviderService()
    {
        return $this->services['newscoop_newscoop.simple_user_provider'] = new \Newscoop\NewscoopBundle\Security\User\SimpleUserProvider($this->get('doctrine.orm.default_entity_manager'), array('users_file' => ($this->targetDirs[2].'/application/configs/security/users.json')));
    }
    protected function getNewscoopNewscoop_TemplateLists_UsersService()
    {
        return $this->services['newscoop_newscoop.template_lists.users'] = new \Newscoop\TemplateList\UsersList($this->get('newscoop_newscoop.criteria.users'));
    }
    protected function getNewscoopNewscoop_ThemesServiceService()
    {
        return $this->services['newscoop_newscoop.themes_service'] = new \Newscoop\Services\ThemesService($this->get('newscoop_newscoop.issue_service'), $this->get('newscoop.cache'), $this->get('newscoop_newscoop.publication_service'), $this->get('doctrine.orm.default_entity_manager'));
    }
    protected function getNewscoopNewscoop_TopicServiceService()
    {
        return $this->services['newscoop_newscoop.topic_service'] = new \Newscoop\NewscoopBundle\Services\TopicService($this->get('doctrine.orm.default_entity_manager'), $this->get('event_dispatcher'));
    }
    protected function getNewscoopNewscoop_TranslationListenerService()
    {
        return $this->services['newscoop_newscoop.translation_listener'] = new \Newscoop\NewscoopBundle\EventListener\OldPluginsTranslationListener($this->get('translator.default'), $this->get('newscoop.cache'), $this->get('newscoop.plugins.service'));
    }
    protected function getNewscoopNewscoop_Twig_IncludeAsVerbatimExtensionService()
    {
        return $this->services['newscoop_newscoop.twig.include_as_verbatim_extension'] = new \Newscoop\NewscoopBundle\Twig\IncludeAsVerbatimExtension();
    }
    protected function getNewscoopNewscoop_Twig_NewscoopExtensionService()
    {
        return $this->services['newscoop_newscoop.twig.newscoop_extension'] = new \Newscoop\NewscoopBundle\Twig\NewscoopExtension($this);
    }
    protected function getNewscoopTickerPlugin_LifecyclesubscriberService()
    {
        return $this->services['newscoop_ticker_plugin.lifecyclesubscriber'] = new \Newscoop\CommunityTickerBundle\EventListener\LifecycleSubscriber($this->get('doctrine.orm.default_entity_manager'));
    }
    protected function getNewscoopTickerPlugin_ListObjects_ListenerService()
    {
        return $this->services['newscoop_ticker_plugin.list_objects.listener'] = new \Newscoop\CommunityTickerBundle\EventListener\ListObjectsListener();
    }
    protected function getNewscoopTickerPlugin_ServiceService()
    {
        return $this->services['newscoop_ticker_plugin.service'] = new \Newscoop\CommunityTickerBundle\Services\CommunityFeedService($this->get('doctrine.orm.default_entity_manager'));
    }
    protected function getNotificationService()
    {
        return $this->services['notification'] = new \Newscoop\Services\NotificationService($this->get('doctrine.orm.default_entity_manager'));
    }
    protected function getPackageService()
    {
        return $this->services['package'] = new \Newscoop\Package\PackageService($this->get('doctrine.orm.default_entity_manager'), $this->get('image'));
    }
    protected function getPackage_SearchService()
    {
        return $this->services['package.search'] = new \Newscoop\Package\PackageSearchService($this->get('doctrine.orm.default_entity_manager'));
    }
    protected function getPlaylistsService()
    {
        return $this->services['playlists'] = new \Newscoop\Services\PlaylistsService($this->get('doctrine.orm.default_entity_manager'), $this->get('event_dispatcher'), $this->get('newscoop.cache'));
    }
    protected function getPreferencesService()
    {
        return $this->services['preferences'] = new \Newscoop\NewscoopBundle\Services\SystemPreferencesService($this->get('doctrine.orm.default_entity_manager'));
    }
    protected function getPropertyAccessorService()
    {
        return $this->services['property_accessor'] = new \Symfony\Component\PropertyAccess\PropertyAccessor();
    }
    protected function getRandomService()
    {
        return $this->services['random'] = new \Newscoop\Random();
    }
    protected function getRelatedArticlesService()
    {
        return $this->services['related_articles'] = new \Newscoop\Services\RelatedArticlesService($this->get('doctrine.orm.default_entity_manager'));
    }
    protected function getRequestService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('request', 'request');
        }
        throw new RuntimeException('You have requested a synthetic service ("request"). The DIC does not know how to construct this service.');
    }
    protected function getRequestStackService()
    {
        return $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack();
    }
    protected function getResponseListenerService()
    {
        return $this->services['response_listener'] = new \Symfony\Component\HttpKernel\EventListener\ResponseListener('UTF-8');
    }
    protected function getRouterService()
    {
        return $this->services['router'] = new \Symfony\Bundle\FrameworkBundle\Routing\Router($this, ($this->targetDirs[2].'/application/configs/symfony/routing.yml'), array('cache_dir' => __DIR__, 'debug' => false, 'generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper', 'generator_cache_class' => 'applicationProdUrlGenerator', 'matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper', 'matcher_cache_class' => 'applicationProdUrlMatcher', 'strict_requirements' => false), $this->get('router.request_context', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('monolog.logger.router', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }
    protected function getRouterListenerService()
    {
        return $this->services['router_listener'] = new \Symfony\Component\HttpKernel\EventListener\RouterListener($this->get('router'), $this->get('router.request_context', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('monolog.logger.request', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('request_stack'));
    }
    protected function getRouting_LoaderService()
    {
        $a = $this->get('file_locator');
        $b = $this->get('annotation_reader');
        $c = new \Sensio\Bundle\FrameworkExtraBundle\Routing\AnnotatedRouteControllerLoader($b);
        $d = new \Symfony\Component\Config\Loader\LoaderResolver();
        $d->addLoader(new \Symfony\Component\Routing\Loader\XmlFileLoader($a));
        $d->addLoader(new \Symfony\Component\Routing\Loader\YamlFileLoader($a));
        $d->addLoader(new \Symfony\Component\Routing\Loader\PhpFileLoader($a));
        $d->addLoader(new \Symfony\Component\Routing\Loader\AnnotationDirectoryLoader($a, $c));
        $d->addLoader(new \Symfony\Component\Routing\Loader\AnnotationFileLoader($a, $c));
        $d->addLoader($c);
        $d->addLoader($this->get('fos_rest.routing.loader.controller'));
        $d->addLoader($this->get('fos_rest.routing.loader.yaml_collection'));
        $d->addLoader($this->get('fos_rest.routing.loader.xml_collection'));
        $d->addLoader($this->get('newscoop_newscoop.routing.loader.plugins'));
        return $this->services['routing.loader'] = new \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader($this->get('controller_name_converter'), $this->get('monolog.logger.router', ContainerInterface::NULL_ON_INVALID_REFERENCE), $d);
    }
    protected function getSearch_ArticleService()
    {
        return $this->services['search.article'] = new \Newscoop\Article\SearchService($this->get('webcode'), $this->get('image.rendition'), $this->get('article.link'), $this->get('doctrine.orm.default_entity_manager'));
    }
    protected function getSearch_CommentService()
    {
        return $this->services['search.comment'] = new \Newscoop\Comment\SearchService($this->get('article.link'), $this->get('doctrine.orm.default_entity_manager'));
    }
    protected function getSearch_UserService()
    {
        return $this->services['search.user'] = new \Newscoop\User\SearchService($this->get('image'));
    }
    protected function getSecurity_ContextService()
    {
        return $this->services['security.context'] = new \Symfony\Component\Security\Core\SecurityContext($this->get('security.authentication.manager'), $this->get('security.access.decision_manager'), false);
    }
    protected function getSecurity_Csrf_TokenManagerService()
    {
        return $this->services['security.csrf.token_manager'] = new \Symfony\Component\Security\Csrf\CsrfTokenManager(new \Symfony\Component\Security\Csrf\TokenGenerator\UriSafeTokenGenerator($this->get('security.secure_random')), new \Symfony\Component\Security\Csrf\TokenStorage\SessionTokenStorage($this->get('session')));
    }
    protected function getSecurity_EncoderFactoryService()
    {
        return $this->services['security.encoder_factory'] = new \Symfony\Component\Security\Core\Encoder\EncoderFactory(array('Symfony\\Component\\Security\\Core\\User\\User' => array('class' => 'Symfony\\Component\\Security\\Core\\Encoder\\PlaintextPasswordEncoder', 'arguments' => array(0 => false)), 'Newscoop\\Entity\\User' => $this->get('newscoop_newscoop.password_encoder')));
    }
    protected function getSecurity_FirewallService()
    {
        return $this->services['security.firewall'] = new \Symfony\Component\Security\Http\Firewall(new \Symfony\Bundle\SecurityBundle\Security\FirewallMap($this, array('security.firewall.map.context.dev' => new \Symfony\Component\HttpFoundation\RequestMatcher('^/(_(profiler|wdt)|css|images|js)/'), 'security.firewall.map.context.login' => new \Symfony\Component\HttpFoundation\RequestMatcher('^/admin/login$'), 'security.firewall.map.context.password_recovery' => new \Symfony\Component\HttpFoundation\RequestMatcher('^/admin/password-recovery'), 'security.firewall.map.context.password_check_token' => new \Symfony\Component\HttpFoundation\RequestMatcher('^/admin/password-check-token'), 'security.firewall.map.context.oauth_token' => new \Symfony\Component\HttpFoundation\RequestMatcher('^/oauth/v2/token'), 'security.firewall.map.context.oauth_authorize' => new \Symfony\Component\HttpFoundation\RequestMatcher('^/oauth/v2/auth'), 'security.firewall.map.context.api' => new \Symfony\Component\HttpFoundation\RequestMatcher('^/(api|content\\-api)'), 'security.firewall.map.context.admin_area' => new \Symfony\Component\HttpFoundation\RequestMatcher('^/admin'), 'security.firewall.map.context.frontend_area' => new \Symfony\Component\HttpFoundation\RequestMatcher('^/'))), $this->get('event_dispatcher'));
    }
    protected function getSecurity_Firewall_Map_Context_AdminAreaService()
    {
        $a = $this->get('security.context');
        $b = $this->get('security.user.provider.concrete.chain_provider');
        $c = $this->get('monolog.logger.security', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        $d = $this->get('event_dispatcher', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        $e = $this->get('security.http_utils');
        $f = $this->get('http_kernel');
        $g = $this->get('security.authentication.manager');
        $h = new \Newscoop\NewscoopBundle\Security\Http\Authentication\InteractiveLogin(array(0 => $b), 'changeme', 'admin_area', array('lifetime' => 31536000, 'path' => '/', 'domain' => NULL, 'name' => 'REMEMBERME', 'secure' => false, 'httponly' => true, 'always_remember_me' => false, 'remember_me_parameter' => '_remember_me'), $c);
        $i = new \Symfony\Component\Security\Http\Firewall\LogoutListener($a, $e, new \Newscoop\NewscoopBundle\Security\Http\Authentication\LogoutSuccessHandler($e, '/', $a), array('csrf_parameter' => '_csrf_token', 'intention' => 'logout', 'logout_path' => 'admin_logout'));
        $i->addHandler($h);
        $j = new \Newscoop\NewscoopBundle\EventListener\CaptchaUsernamePasswordFormAuthenticationListener($a, $g, $this->get('security.authentication.session_strategy'), $e, 'admin_area', new \Newscoop\NewscoopBundle\Security\Http\Authentication\AuthenticationSuccessHandler($e, array(), $this->get('auth.adapter'), $this->get('doctrine.orm.default_entity_manager'), $this->get('user')), new \Newscoop\NewscoopBundle\Security\Http\Authentication\AuthenticationFailedHandler($f, $e, array('login_path' => 'admin_login', 'failure_path' => NULL, 'failure_forward' => false, 'failure_path_parameter' => '_failure_path'), $c), array('use_forward' => true, 'check_path' => 'admin_login_check', 'require_previous_session' => true, 'username_parameter' => '_username', 'password_parameter' => '_password', 'csrf_parameter' => '_csrf_token', 'intention' => 'authenticate', 'post_only' => true), $c, $d, NULL);
        $j->setRememberMeServices($h);
        return $this->services['security.firewall.map.context.admin_area'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(array(0 => $this->get('security.channel_listener'), 1 => new \Symfony\Component\Security\Http\Firewall\ContextListener($a, array(0 => $b, 1 => $this->get('newscoop_newscoop.simple_user_provider'), 2 => $this->get('security.user.provider.concrete.backend_db'), 3 => $this->get('security.user.provider.concrete.frontend_db')), 'admin_area', $c, $d), 2 => $i, 3 => $j, 4 => new \Symfony\Component\Security\Http\Firewall\RememberMeListener($a, $h, $g, $c, $d), 5 => $this->get('security.access_listener')), new \Symfony\Component\Security\Http\Firewall\ExceptionListener($a, $this->get('security.authentication.trust_resolver'), $e, 'admin_area', new \Symfony\Component\Security\Http\EntryPoint\FormAuthenticationEntryPoint($f, $e, 'admin_login', true), NULL, NULL, $c));
    }
    protected function getSecurity_Firewall_Map_Context_ApiService()
    {
        $a = $this->get('security.context');
        $b = $this->get('fos_oauth_server.server');
        $c = $this->get('monolog.logger.security', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        return $this->services['security.firewall.map.context.api'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(array(0 => $this->get('security.channel_listener'), 1 => new \FOS\OAuthServerBundle\Security\Firewall\OAuthListener($a, $this->get('security.authentication.manager'), $b), 2 => new \Symfony\Component\Security\Http\Firewall\AnonymousAuthenticationListener($a, '56c6195b25265', $c), 3 => $this->get('security.access_listener')), new \Symfony\Component\Security\Http\Firewall\ExceptionListener($a, $this->get('security.authentication.trust_resolver'), $this->get('security.http_utils'), 'api', new \FOS\OAuthServerBundle\Security\EntryPoint\OAuthEntryPoint($b), NULL, NULL, $c));
    }
    protected function getSecurity_Firewall_Map_Context_DevService()
    {
        return $this->services['security.firewall.map.context.dev'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(array(), NULL);
    }
    protected function getSecurity_Firewall_Map_Context_FrontendAreaService()
    {
        $a = $this->get('security.context');
        $b = $this->get('security.user.provider.concrete.frontend_db');
        $c = $this->get('monolog.logger.security', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        $d = $this->get('event_dispatcher', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        $e = $this->get('security.http_utils');
        $f = $this->get('http_kernel');
        $g = $this->get('security.authentication.manager');
        $h = new \Newscoop\NewscoopBundle\Security\Http\Authentication\InteractiveLogin(array(0 => $b), 'changeme', 'frontend_area', array('lifetime' => 31536000, 'path' => '/', 'domain' => NULL, 'name' => 'REMEMBERME', 'secure' => false, 'httponly' => true, 'always_remember_me' => false, 'remember_me_parameter' => '_remember_me'), $c);
        $i = new \Symfony\Component\Security\Http\Firewall\LogoutListener($a, $e, new \Newscoop\NewscoopBundle\Security\Http\Authentication\FrontendLogoutSuccessHandler($e, '/', $a), array('csrf_parameter' => '_csrf_token', 'intention' => 'logout', 'logout_path' => '/auth/logout'));
        $i->addHandler($h);
        $j = new \Newscoop\NewscoopBundle\EventListener\CaptchaUsernamePasswordFormAuthenticationListener($a, $g, $this->get('security.authentication.session_strategy'), $e, 'frontend_area', $this->get('newscoop_newscoop.security.authentication.frontend.success_handler'), new \Newscoop\NewscoopBundle\Security\Http\Authentication\AuthenticationFailedHandler($f, $e, array('login_path' => '/auth', 'failure_path' => NULL, 'failure_forward' => false, 'failure_path_parameter' => '_failure_path'), $c), array('check_path' => '/auth/login_check', 'username_parameter' => 'email', 'password_parameter' => 'password', 'use_forward' => false, 'require_previous_session' => true, 'csrf_parameter' => '_csrf_token', 'intention' => 'authenticate', 'post_only' => true), $c, $d, NULL);
        $j->setRememberMeServices($h);
        return $this->services['security.firewall.map.context.frontend_area'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(array(0 => $this->get('security.channel_listener'), 1 => new \Symfony\Component\Security\Http\Firewall\ContextListener($a, array(0 => $this->get('security.user.provider.concrete.chain_provider'), 1 => $this->get('newscoop_newscoop.simple_user_provider'), 2 => $this->get('security.user.provider.concrete.backend_db'), 3 => $b), 'frontend_area', $c, $d), 2 => $i, 3 => $j, 4 => new \Symfony\Component\Security\Http\Firewall\RememberMeListener($a, $h, $g, $c, $d), 5 => new \Symfony\Component\Security\Http\Firewall\AnonymousAuthenticationListener($a, '56c6195b25265', $c), 6 => $this->get('security.access_listener')), new \Symfony\Component\Security\Http\Firewall\ExceptionListener($a, $this->get('security.authentication.trust_resolver'), $e, 'frontend_area', new \Symfony\Component\Security\Http\EntryPoint\FormAuthenticationEntryPoint($f, $e, '/auth', false), NULL, NULL, $c));
    }
    protected function getSecurity_Firewall_Map_Context_LoginService()
    {
        return $this->services['security.firewall.map.context.login'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(array(), NULL);
    }
    protected function getSecurity_Firewall_Map_Context_OauthAuthorizeService()
    {
        $a = $this->get('security.context');
        $b = $this->get('monolog.logger.security', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        $c = $this->get('event_dispatcher', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        $d = $this->get('security.http_utils');
        $e = $this->get('http_kernel');
        $f = new \Symfony\Component\Security\Http\Firewall\LogoutListener($a, $d, $this->get('newscoop_newscoop.security.oauth.logout.success_handler'), array('csrf_parameter' => '_csrf_token', 'intention' => 'logout', 'logout_path' => '/oauth/v2/auth/logout'));
        $f->addHandler(new \Symfony\Component\Security\Http\Logout\SessionLogoutHandler());
        return $this->services['security.firewall.map.context.oauth_authorize'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(array(0 => $this->get('security.channel_listener'), 1 => new \Symfony\Component\Security\Http\Firewall\ContextListener($a, array(0 => $this->get('security.user.provider.concrete.chain_provider'), 1 => $this->get('newscoop_newscoop.simple_user_provider'), 2 => $this->get('security.user.provider.concrete.backend_db'), 3 => $this->get('security.user.provider.concrete.frontend_db')), 'oauth_authorize', $b, $c), 2 => $f, 3 => new \Newscoop\NewscoopBundle\EventListener\CaptchaUsernamePasswordFormAuthenticationListener($a, $this->get('security.authentication.manager'), $this->get('security.authentication.session_strategy'), $d, 'oauth_authorize', new \Newscoop\NewscoopBundle\Security\Http\Authentication\OAuthSuccessHandler($d, array(), $this->get('auth.adapter'), $this->get('user')), new \Newscoop\NewscoopBundle\Security\Http\Authentication\AuthenticationFailedHandler($e, $d, array('login_path' => '/oauth/v2/auth_login', 'failure_path' => NULL, 'failure_forward' => false, 'failure_path_parameter' => '_failure_path'), $b), array('use_forward' => true, 'check_path' => '/oauth/v2/auth_login_check', 'require_previous_session' => true, 'username_parameter' => '_username', 'password_parameter' => '_password', 'csrf_parameter' => '_csrf_token', 'intention' => 'authenticate', 'post_only' => true), $b, $c, NULL), 4 => $this->get('security.access_listener')), new \Symfony\Component\Security\Http\Firewall\ExceptionListener($a, $this->get('security.authentication.trust_resolver'), $d, 'oauth_authorize', new \Symfony\Component\Security\Http\EntryPoint\FormAuthenticationEntryPoint($e, $d, '/oauth/v2/auth_login', true), NULL, NULL, $b));
    }
    protected function getSecurity_Firewall_Map_Context_OauthTokenService()
    {
        return $this->services['security.firewall.map.context.oauth_token'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(array(), NULL);
    }
    protected function getSecurity_Firewall_Map_Context_PasswordCheckTokenService()
    {
        return $this->services['security.firewall.map.context.password_check_token'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(array(), NULL);
    }
    protected function getSecurity_Firewall_Map_Context_PasswordRecoveryService()
    {
        return $this->services['security.firewall.map.context.password_recovery'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(array(), NULL);
    }
    protected function getSecurity_Rememberme_ResponseListenerService()
    {
        return $this->services['security.rememberme.response_listener'] = new \Symfony\Component\Security\Http\RememberMe\ResponseListener();
    }
    protected function getSecurity_SecureRandomService()
    {
        return $this->services['security.secure_random'] = new \Symfony\Component\Security\Core\Util\SecureRandom((__DIR__.'/secure_random.seed'), $this->get('monolog.logger.security', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }
    protected function getSecurity_Validator_UserPasswordService()
    {
        return $this->services['security.validator.user_password'] = new \Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator($this->get('security.context'), $this->get('security.encoder_factory'));
    }
    protected function getSensioFrameworkExtra_Cache_ListenerService()
    {
        return $this->services['sensio_framework_extra.cache.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener();
    }
    protected function getSensioFrameworkExtra_Controller_ListenerService()
    {
        return $this->services['sensio_framework_extra.controller.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener($this->get('annotation_reader'));
    }
    protected function getSensioFrameworkExtra_Converter_DatetimeService()
    {
        return $this->services['sensio_framework_extra.converter.datetime'] = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter();
    }
    protected function getSensioFrameworkExtra_Converter_Doctrine_OrmService()
    {
        return $this->services['sensio_framework_extra.converter.doctrine.orm'] = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter($this->get('doctrine', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }
    protected function getSensioFrameworkExtra_Converter_ListenerService()
    {
        return $this->services['sensio_framework_extra.converter.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener($this->get('sensio_framework_extra.converter.manager'), true);
    }
    protected function getSensioFrameworkExtra_Converter_ManagerService()
    {
        $this->services['sensio_framework_extra.converter.manager'] = $instance = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager();
        $instance->add($this->get('sensio_framework_extra.converter.doctrine.orm'), 0, 'doctrine.orm');
        $instance->add($this->get('sensio_framework_extra.converter.datetime'), 0, 'datetime');
        return $instance;
    }
    protected function getSensioFrameworkExtra_Security_ListenerService()
    {
        return $this->services['sensio_framework_extra.security.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener($this->get('security.context', ContainerInterface::NULL_ON_INVALID_REFERENCE), new \Sensio\Bundle\FrameworkExtraBundle\Security\ExpressionLanguage(), $this->get('security.authentication.trust_resolver', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('security.role_hierarchy', ContainerInterface::NULL_ON_INVALID_REFERENCE), NULL, NULL);
    }
    protected function getSensioFrameworkExtra_View_GuesserService()
    {
        return $this->services['sensio_framework_extra.view.guesser'] = new \Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser($this->get('kernel'));
    }
    protected function getServiceContainerService()
    {
        throw new RuntimeException('You have requested a synthetic service ("service_container"). The DIC does not know how to construct this service.');
    }
    protected function getSessionService()
    {
        return $this->services['session'] = new \Symfony\Component\HttpFoundation\Session\Session($this->get('newscoop_newscoop.session.storage'), new \Symfony\Component\HttpFoundation\Session\Attribute\AttributeBag(), new \Symfony\Component\HttpFoundation\Session\Flash\FlashBag());
    }
    protected function getSession_SaveListenerService()
    {
        return $this->services['session.save_listener'] = new \Symfony\Component\HttpKernel\EventListener\SaveSessionListener();
    }
    protected function getSession_Storage_FilesystemService()
    {
        return $this->services['session.storage.filesystem'] = new \Symfony\Component\HttpFoundation\Session\Storage\MockFileSessionStorage((__DIR__.'/sessions'), 'MOCKSESSID', $this->get('session.storage.metadata_bag'));
    }
    protected function getSession_Storage_NativeService()
    {
        return $this->services['session.storage.native'] = new \Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage(array('gc_probability' => 1), NULL, $this->get('session.storage.metadata_bag'));
    }
    protected function getSession_Storage_PhpBridgeService()
    {
        return $this->services['session.storage.php_bridge'] = new \Symfony\Component\HttpFoundation\Session\Storage\PhpBridgeSessionStorage(NULL, $this->get('session.storage.metadata_bag'));
    }
    protected function getSessionListenerService()
    {
        return $this->services['session_listener'] = new \Symfony\Bundle\FrameworkBundle\EventListener\SessionListener($this);
    }
    protected function getStatService()
    {
        return $this->services['stat'] = new \Newscoop\Services\StatService($this->get('doctrine.orm.default_entity_manager'));
    }
    protected function getStofDoctrineExtensions_EventListener_LocaleService()
    {
        return $this->services['stof_doctrine_extensions.event_listener.locale'] = new \Stof\DoctrineExtensionsBundle\EventListener\LocaleListener($this->get('stof_doctrine_extensions.listener.translatable'));
    }
    protected function getStofDoctrineExtensions_Uploadable_ManagerService()
    {
        $a = new \Gedmo\Uploadable\UploadableListener(new \Stof\DoctrineExtensionsBundle\Uploadable\MimeTypeGuesserAdapter());
        $a->setAnnotationReader($this->get('annotation_reader'));
        $a->setDefaultFileInfoClass('Stof\\DoctrineExtensionsBundle\\Uploadable\\UploadedFileInfo');
        return $this->services['stof_doctrine_extensions.uploadable.manager'] = new \Stof\DoctrineExtensionsBundle\Uploadable\UploadableManager($a, 'Stof\\DoctrineExtensionsBundle\\Uploadable\\UploadedFileInfo');
    }
    protected function getStorageService()
    {
        return $this->services['storage'] = new \Newscoop\Storage\StorageService($this->get('storage.adapter'));
    }
    protected function getStorage_AdapterService()
    {
        return $this->services['storage.adapter'] = new \Zend_Cloud_StorageService_Adapter_FileSystem(array('local_directory' => ($this->targetDirs[2].'/application/..')));
    }
    protected function getStreamedResponseListenerService()
    {
        return $this->services['streamed_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener();
    }
    protected function getSubscriptionService()
    {
        return $this->services['subscription'] = new \Newscoop\Subscription\SubscriptionFacade($this->get('doctrine.orm.default_entity_manager'));
    }
    protected function getSubscription_IpService()
    {
        return $this->services['subscription.ip'] = new \Newscoop\Subscription\IpFacade($this->get('doctrine.orm.default_entity_manager'));
    }
    protected function getSubscription_SectionService()
    {
        return $this->services['subscription.section'] = new \Newscoop\Subscription\SectionFacade($this->get('doctrine.orm.default_entity_manager'));
    }
    protected function getSubscription_ServiceService()
    {
        return $this->services['subscription.service'] = new \Newscoop\Services\SubscriptionService($this->get('doctrine.orm.default_entity_manager'));
    }
    protected function getSwiftmailer_EmailSender_ListenerService()
    {
        return $this->services['swiftmailer.email_sender.listener'] = new \Symfony\Bundle\SwiftmailerBundle\EventListener\EmailSenderListener($this, $this->get('logger', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }
    protected function getSwiftmailer_Mailer_DefaultService()
    {
        return $this->services['swiftmailer.mailer.default'] = new \Swift_Mailer($this->get('swiftmailer.mailer.default.transport'));
    }
    protected function getSwiftmailer_Mailer_Default_TransportService()
    {
        $a = new \Swift_Transport_Esmtp_AuthHandler(array(0 => new \Swift_Transport_Esmtp_Auth_CramMd5Authenticator(), 1 => new \Swift_Transport_Esmtp_Auth_LoginAuthenticator(), 2 => new \Swift_Transport_Esmtp_Auth_PlainAuthenticator()));
        $a->setUsername(NULL);
        $a->setPassword(NULL);
        $a->setAuthMode(NULL);
        $this->services['swiftmailer.mailer.default.transport'] = $instance = new \Swift_Transport_EsmtpTransport(new \Swift_Transport_StreamBuffer(new \Swift_StreamFilters_StringReplacementFilterFactory()), array(0 => $a), new \Swift_Events_SimpleEventDispatcher());
        $instance->setHost('localhost');
        $instance->setPort(25);
        $instance->setEncryption(NULL);
        $instance->setTimeout(30);
        $instance->setSourceIp(NULL);
        return $instance;
    }
    protected function getTemplatingService()
    {
        $this->services['templating'] = $instance = new \Symfony\Bundle\FrameworkBundle\Templating\DelegatingEngine($this, array());
        $instance->addEngine(new \Symfony\Bundle\TwigBundle\TwigEngine($this->get('twig'), $this->get('templating.name_parser'), $this->get('templating.locator')));
        $instance->addEngine($this->get('templating.engine.php'));
        return $instance;
    }
    protected function getTemplating_Asset_PackageFactoryService()
    {
        return $this->services['templating.asset.package_factory'] = new \Symfony\Bundle\FrameworkBundle\Templating\Asset\PackageFactory($this);
    }
    protected function getTemplating_FilenameParserService()
    {
        return $this->services['templating.filename_parser'] = new \Symfony\Bundle\FrameworkBundle\Templating\TemplateFilenameParser();
    }
    protected function getTemplating_GlobalsService()
    {
        return $this->services['templating.globals'] = new \Symfony\Bundle\FrameworkBundle\Templating\GlobalVariables($this);
    }
    protected function getTemplating_Helper_ActionsService()
    {
        return $this->services['templating.helper.actions'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\ActionsHelper($this->get('fragment.handler'));
    }
    protected function getTemplating_Helper_AssetsService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('templating.helper.assets', 'request');
        }
        return $this->services['templating.helper.assets'] = $this->scopedServices['request']['templating.helper.assets'] = new \Symfony\Component\Templating\Helper\CoreAssetsHelper(new \Symfony\Bundle\FrameworkBundle\Templating\Asset\PathPackage($this->get('request'), NULL, '%s?%s'), array());
    }
    protected function getTemplating_Helper_CodeService()
    {
        return $this->services['templating.helper.code'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\CodeHelper(NULL, ($this->targetDirs[2].'/application'), 'UTF-8');
    }
    protected function getTemplating_Helper_FormService()
    {
        return $this->services['templating.helper.form'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\FormHelper(new \Symfony\Component\Form\FormRenderer(new \Symfony\Component\Form\Extension\Templating\TemplatingRendererEngine($this->get('templating.engine.php'), array(0 => 'FrameworkBundle:Form', 1 => 'EWZRecaptchaBundle:Form')), $this->get('form.csrf_provider', ContainerInterface::NULL_ON_INVALID_REFERENCE)));
    }
    protected function getTemplating_Helper_LogoutUrlService()
    {
        $this->services['templating.helper.logout_url'] = $instance = new \Symfony\Bundle\SecurityBundle\Templating\Helper\LogoutUrlHelper($this, $this->get('router'));
        $instance->registerListener('oauth_authorize', '/oauth/v2/auth/logout', 'logout', '_csrf_token', NULL);
        $instance->registerListener('admin_area', 'admin_logout', 'logout', '_csrf_token', NULL);
        $instance->registerListener('frontend_area', '/auth/logout', 'logout', '_csrf_token', NULL);
        return $instance;
    }
    protected function getTemplating_Helper_RequestService()
    {
        return $this->services['templating.helper.request'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\RequestHelper($this->get('request_stack'));
    }
    protected function getTemplating_Helper_RouterService()
    {
        return $this->services['templating.helper.router'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\RouterHelper($this->get('router'));
    }
    protected function getTemplating_Helper_SecurityService()
    {
        return $this->services['templating.helper.security'] = new \Symfony\Bundle\SecurityBundle\Templating\Helper\SecurityHelper($this->get('security.context', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }
    protected function getTemplating_Helper_SessionService()
    {
        return $this->services['templating.helper.session'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\SessionHelper($this->get('request_stack'));
    }
    protected function getTemplating_Helper_SlotsService()
    {
        return $this->services['templating.helper.slots'] = new \Symfony\Component\Templating\Helper\SlotsHelper();
    }
    protected function getTemplating_Helper_StopwatchService()
    {
        return $this->services['templating.helper.stopwatch'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\StopwatchHelper(NULL);
    }
    protected function getTemplating_Helper_TranslatorService()
    {
        return $this->services['templating.helper.translator'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\TranslatorHelper($this->get('translator.default'));
    }
    protected function getTemplating_LoaderService()
    {
        return $this->services['templating.loader'] = new \Symfony\Bundle\FrameworkBundle\Templating\Loader\FilesystemLoader($this->get('templating.locator'));
    }
    protected function getTemplating_NameParserService()
    {
        return $this->services['templating.name_parser'] = new \Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser($this->get('kernel'));
    }
    protected function getTranslation_Dumper_CsvService()
    {
        return $this->services['translation.dumper.csv'] = new \Symfony\Component\Translation\Dumper\CsvFileDumper();
    }
    protected function getTranslation_Dumper_IniService()
    {
        return $this->services['translation.dumper.ini'] = new \Symfony\Component\Translation\Dumper\IniFileDumper();
    }
    protected function getTranslation_Dumper_JsonService()
    {
        return $this->services['translation.dumper.json'] = new \Symfony\Component\Translation\Dumper\JsonFileDumper();
    }
    protected function getTranslation_Dumper_MoService()
    {
        return $this->services['translation.dumper.mo'] = new \Symfony\Component\Translation\Dumper\MoFileDumper();
    }
    protected function getTranslation_Dumper_PhpService()
    {
        return $this->services['translation.dumper.php'] = new \Symfony\Component\Translation\Dumper\PhpFileDumper();
    }
    protected function getTranslation_Dumper_PoService()
    {
        return $this->services['translation.dumper.po'] = new \Symfony\Component\Translation\Dumper\PoFileDumper();
    }
    protected function getTranslation_Dumper_QtService()
    {
        return $this->services['translation.dumper.qt'] = new \Symfony\Component\Translation\Dumper\QtFileDumper();
    }
    protected function getTranslation_Dumper_ResService()
    {
        return $this->services['translation.dumper.res'] = new \Symfony\Component\Translation\Dumper\IcuResFileDumper();
    }
    protected function getTranslation_Dumper_XliffService()
    {
        return $this->services['translation.dumper.xliff'] = new \Symfony\Component\Translation\Dumper\XliffFileDumper();
    }
    protected function getTranslation_Dumper_YmlService()
    {
        return $this->services['translation.dumper.yml'] = new \Symfony\Component\Translation\Dumper\YamlFileDumper();
    }
    protected function getTranslation_ExtractorService()
    {
        $this->services['translation.extractor'] = $instance = new \Symfony\Component\Translation\Extractor\ChainExtractor();
        $instance->addExtractor('php', $this->get('translation.extractor.php'));
        $instance->addExtractor('twig', $this->get('twig.translation.extractor'));
        return $instance;
    }
    protected function getTranslation_Extractor_PhpService()
    {
        return $this->services['translation.extractor.php'] = new \Symfony\Bundle\FrameworkBundle\Translation\PhpExtractor();
    }
    protected function getTranslation_LoaderService()
    {
        $a = $this->get('translation.loader.xliff');
        $this->services['translation.loader'] = $instance = new \Symfony\Bundle\FrameworkBundle\Translation\TranslationLoader();
        $instance->addLoader('php', $this->get('translation.loader.php'));
        $instance->addLoader('yml', $this->get('translation.loader.yml'));
        $instance->addLoader('xlf', $a);
        $instance->addLoader('xliff', $a);
        $instance->addLoader('po', $this->get('translation.loader.po'));
        $instance->addLoader('mo', $this->get('translation.loader.mo'));
        $instance->addLoader('ts', $this->get('translation.loader.qt'));
        $instance->addLoader('csv', $this->get('translation.loader.csv'));
        $instance->addLoader('res', $this->get('translation.loader.res'));
        $instance->addLoader('dat', $this->get('translation.loader.dat'));
        $instance->addLoader('ini', $this->get('translation.loader.ini'));
        $instance->addLoader('json', $this->get('translation.loader.json'));
        return $instance;
    }
    protected function getTranslation_Loader_CsvService()
    {
        return $this->services['translation.loader.csv'] = new \Symfony\Component\Translation\Loader\CsvFileLoader();
    }
    protected function getTranslation_Loader_DatService()
    {
        return $this->services['translation.loader.dat'] = new \Symfony\Component\Translation\Loader\IcuDatFileLoader();
    }
    protected function getTranslation_Loader_IniService()
    {
        return $this->services['translation.loader.ini'] = new \Symfony\Component\Translation\Loader\IniFileLoader();
    }
    protected function getTranslation_Loader_JsonService()
    {
        return $this->services['translation.loader.json'] = new \Symfony\Component\Translation\Loader\JsonFileLoader();
    }
    protected function getTranslation_Loader_MoService()
    {
        return $this->services['translation.loader.mo'] = new \Symfony\Component\Translation\Loader\MoFileLoader();
    }
    protected function getTranslation_Loader_PhpService()
    {
        return $this->services['translation.loader.php'] = new \Symfony\Component\Translation\Loader\PhpFileLoader();
    }
    protected function getTranslation_Loader_PoService()
    {
        return $this->services['translation.loader.po'] = new \Symfony\Component\Translation\Loader\PoFileLoader();
    }
    protected function getTranslation_Loader_QtService()
    {
        return $this->services['translation.loader.qt'] = new \Symfony\Component\Translation\Loader\QtFileLoader();
    }
    protected function getTranslation_Loader_ResService()
    {
        return $this->services['translation.loader.res'] = new \Symfony\Component\Translation\Loader\IcuResFileLoader();
    }
    protected function getTranslation_Loader_XliffService()
    {
        return $this->services['translation.loader.xliff'] = new \Symfony\Component\Translation\Loader\XliffFileLoader();
    }
    protected function getTranslation_Loader_YmlService()
    {
        return $this->services['translation.loader.yml'] = new \Symfony\Component\Translation\Loader\YamlFileLoader();
    }
    protected function getTranslation_WriterService()
    {
        $this->services['translation.writer'] = $instance = new \Symfony\Component\Translation\Writer\TranslationWriter();
        $instance->addDumper('php', $this->get('translation.dumper.php'));
        $instance->addDumper('xlf', $this->get('translation.dumper.xliff'));
        $instance->addDumper('po', $this->get('translation.dumper.po'));
        $instance->addDumper('mo', $this->get('translation.dumper.mo'));
        $instance->addDumper('yml', $this->get('translation.dumper.yml'));
        $instance->addDumper('ts', $this->get('translation.dumper.qt'));
        $instance->addDumper('csv', $this->get('translation.dumper.csv'));
        $instance->addDumper('ini', $this->get('translation.dumper.ini'));
        $instance->addDumper('json', $this->get('translation.dumper.json'));
        $instance->addDumper('res', $this->get('translation.dumper.res'));
        return $instance;
    }
    protected function getTranslator_DefaultService()
    {
        $this->services['translator.default'] = $instance = new \Symfony\Bundle\FrameworkBundle\Translation\Translator($this, new \Symfony\Component\Translation\MessageSelector(), array('translation.loader.php' => array(0 => 'php'), 'translation.loader.yml' => array(0 => 'yml'), 'translation.loader.xliff' => array(0 => 'xlf', 1 => 'xliff'), 'translation.loader.po' => array(0 => 'po'), 'translation.loader.mo' => array(0 => 'mo'), 'translation.loader.qt' => array(0 => 'ts'), 'translation.loader.csv' => array(0 => 'csv'), 'translation.loader.res' => array(0 => 'res'), 'translation.loader.dat' => array(0 => 'dat'), 'translation.loader.ini' => array(0 => 'ini'), 'translation.loader.json' => array(0 => 'json')), array('cache_dir' => (__DIR__.'/translations'), 'debug' => false));
        $instance->setFallbackLocales(array(0 => 'en'));
        $instance->addResource('xlf', ($this->targetDirs[2].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.de.xlf'), 'de', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[2].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.hy.xlf'), 'hy', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[2].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.da.xlf'), 'da', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[2].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.hr.xlf'), 'hr', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[2].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ja.xlf'), 'ja', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[2].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.pt.xlf'), 'pt', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[2].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.zh_CN.xlf'), 'zh_CN', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[2].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.he.xlf'), 'he', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[2].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.pl.xlf'), 'pl', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[2].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.bg.xlf'), 'bg', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[2].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.fa.xlf'), 'fa', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[2].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.nl.xlf'), 'nl', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[2].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.no.xlf'), 'no', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[2].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sv.xlf'), 'sv', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[2].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.cs.xlf'), 'cs', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[2].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.mn.xlf'), 'mn', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[2].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sk.xlf'), 'sk', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[2].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.it.xlf'), 'it', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[2].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.eu.xlf'), 'eu', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[2].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.nb.xlf'), 'nb', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[2].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.et.xlf'), 'et', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[2].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.vi.xlf'), 'vi', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[2].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ro.xlf'), 'ro', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[2].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.uk.xlf'), 'uk', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[2].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.fr.xlf'), 'fr', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[2].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.th.xlf'), 'th', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[2].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.gl.xlf'), 'gl', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[2].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sq.xlf'), 'sq', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[2].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ar.xlf'), 'ar', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[2].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.pt_BR.xlf'), 'pt_BR', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[2].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.en.xlf'), 'en', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[2].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.zh_TW.xlf'), 'zh_TW', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[2].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ca.xlf'), 'ca', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[2].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.es.xlf'), 'es', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[2].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ru.xlf'), 'ru', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[2].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.hu.xlf'), 'hu', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[2].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sl.xlf'), 'sl', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[2].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sr_Cyrl.xlf'), 'sr_Cyrl', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[2].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.tr.xlf'), 'tr', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[2].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.lt.xlf'), 'lt', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[2].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.az.xlf'), 'az', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[2].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.id.xlf'), 'id', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[2].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.fi.xlf'), 'fi', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[2].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sr_Latn.xlf'), 'sr_Latn', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[2].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.el.xlf'), 'el', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[2].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.cy.xlf'), 'cy', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[2].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.af.xlf'), 'af', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[2].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.lb.xlf'), 'lb', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[2].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.de.xlf'), 'de', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[2].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.hy.xlf'), 'hy', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[2].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.da.xlf'), 'da', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[2].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.hr.xlf'), 'hr', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[2].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ja.xlf'), 'ja', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[2].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.pt.xlf'), 'pt', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[2].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.zh_CN.xlf'), 'zh_CN', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[2].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.he.xlf'), 'he', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[2].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.lv.xlf'), 'lv', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[2].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.pl.xlf'), 'pl', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[2].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.bg.xlf'), 'bg', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[2].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.fa.xlf'), 'fa', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[2].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.nl.xlf'), 'nl', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[2].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sv.xlf'), 'sv', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[2].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.cs.xlf'), 'cs', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[2].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.mn.xlf'), 'mn', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[2].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sk.xlf'), 'sk', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[2].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.it.xlf'), 'it', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[2].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.eu.xlf'), 'eu', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[2].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.nb.xlf'), 'nb', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[2].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.et.xlf'), 'et', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[2].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ro.xlf'), 'ro', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[2].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.uk.xlf'), 'uk', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[2].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.fr.xlf'), 'fr', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[2].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.gl.xlf'), 'gl', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[2].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ar.xlf'), 'ar', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[2].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.pt_BR.xlf'), 'pt_BR', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[2].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.en.xlf'), 'en', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[2].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ca.xlf'), 'ca', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[2].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.es.xlf'), 'es', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[2].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ru.xlf'), 'ru', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[2].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.hu.xlf'), 'hu', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[2].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sl.xlf'), 'sl', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[2].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sr_Cyrl.xlf'), 'sr_Cyrl', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[2].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.lt.xlf'), 'lt', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[2].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.az.xlf'), 'az', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[2].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.id.xlf'), 'id', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[2].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.fi.xlf'), 'fi', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[2].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sr_Latn.xlf'), 'sr_Latn', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[2].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.el.xlf'), 'el', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[2].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.lb.xlf'), 'lb', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[2].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.cs.xlf'), 'cs', 'security');
        $instance->addResource('xlf', ($this->targetDirs[2].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.az.xlf'), 'az', 'security');
        $instance->addResource('xlf', ($this->targetDirs[2].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.el.xlf'), 'el', 'security');
        $instance->addResource('xlf', ($this->targetDirs[2].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.de.xlf'), 'de', 'security');
        $instance->addResource('xlf', ($this->targetDirs[2].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.gl.xlf'), 'gl', 'security');
        $instance->addResource('xlf', ($this->targetDirs[2].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.ro.xlf'), 'ro', 'security');
        $instance->addResource('xlf', ($this->targetDirs[2].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.sv.xlf'), 'sv', 'security');
        $instance->addResource('xlf', ($this->targetDirs[2].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.no.xlf'), 'no', 'security');
        $instance->addResource('xlf', ($this->targetDirs[2].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.hu.xlf'), 'hu', 'security');
        $instance->addResource('xlf', ($this->targetDirs[2].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.sl.xlf'), 'sl', 'security');
        $instance->addResource('xlf', ($this->targetDirs[2].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.fr.xlf'), 'fr', 'security');
        $instance->addResource('xlf', ($this->targetDirs[2].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.sr_Cyrl.xlf'), 'sr_Cyrl', 'security');
        $instance->addResource('xlf', ($this->targetDirs[2].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.da.xlf'), 'da', 'security');
        $instance->addResource('xlf', ($this->targetDirs[2].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.fa.xlf'), 'fa', 'security');
        $instance->addResource('xlf', ($this->targetDirs[2].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.it.xlf'), 'it', 'security');
        $instance->addResource('xlf', ($this->targetDirs[2].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.es.xlf'), 'es', 'security');
        $instance->addResource('xlf', ($this->targetDirs[2].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.sk.xlf'), 'sk', 'security');
        $instance->addResource('xlf', ($this->targetDirs[2].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.lb.xlf'), 'lb', 'security');
        $instance->addResource('xlf', ($this->targetDirs[2].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.pt_BR.xlf'), 'pt_BR', 'security');
        $instance->addResource('xlf', ($this->targetDirs[2].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.ar.xlf'), 'ar', 'security');
        $instance->addResource('xlf', ($this->targetDirs[2].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.nl.xlf'), 'nl', 'security');
        $instance->addResource('xlf', ($this->targetDirs[2].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.ru.xlf'), 'ru', 'security');
        $instance->addResource('xlf', ($this->targetDirs[2].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.tr.xlf'), 'tr', 'security');
        $instance->addResource('xlf', ($this->targetDirs[2].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.ca.xlf'), 'ca', 'security');
        $instance->addResource('xlf', ($this->targetDirs[2].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.pt_PT.xlf'), 'pt_PT', 'security');
        $instance->addResource('xlf', ($this->targetDirs[2].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.en.xlf'), 'en', 'security');
        $instance->addResource('xlf', ($this->targetDirs[2].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.ua.xlf'), 'ua', 'security');
        $instance->addResource('xlf', ($this->targetDirs[2].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.pl.xlf'), 'pl', 'security');
        $instance->addResource('xlf', ($this->targetDirs[2].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.he.xlf'), 'he', 'security');
        $instance->addResource('xlf', ($this->targetDirs[2].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.sr_Latn.xlf'), 'sr_Latn', 'security');
        $instance->addResource('xlf', ($this->targetDirs[2].'/vendor/newscoop/recaptcha-bundle/EWZ/Bundle/RecaptchaBundle/Resources/translations/validators.pl.xlf'), 'pl', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[2].'/vendor/newscoop/recaptcha-bundle/EWZ/Bundle/RecaptchaBundle/Resources/translations/validators.nl.xlf'), 'nl', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[2].'/vendor/newscoop/recaptcha-bundle/EWZ/Bundle/RecaptchaBundle/Resources/translations/validators.fr.xlf'), 'fr', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[2].'/vendor/newscoop/recaptcha-bundle/EWZ/Bundle/RecaptchaBundle/Resources/translations/validators.en.xlf'), 'en', 'validators');
        $instance->addResource('yml', ($this->targetDirs[2].'/vendor/friendsofsymfony/oauth-server-bundle/FOS/OAuthServerBundle/Resources/translations/FOSOAuthServerBundle.sl.yml'), 'sl', 'FOSOAuthServerBundle');
        $instance->addResource('yml', ($this->targetDirs[2].'/vendor/friendsofsymfony/oauth-server-bundle/FOS/OAuthServerBundle/Resources/translations/FOSOAuthServerBundle.de.yml'), 'de', 'FOSOAuthServerBundle');
        $instance->addResource('yml', ($this->targetDirs[2].'/vendor/friendsofsymfony/oauth-server-bundle/FOS/OAuthServerBundle/Resources/translations/FOSOAuthServerBundle.en.yml'), 'en', 'FOSOAuthServerBundle');
        $instance->addResource('yml', ($this->targetDirs[2].'/vendor/friendsofsymfony/oauth-server-bundle/FOS/OAuthServerBundle/Resources/translations/FOSOAuthServerBundle.fr.yml'), 'fr', 'FOSOAuthServerBundle');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/user_subscriptions.fa.yml'), 'fa', 'user_subscriptions');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_topics.sr.yml'), 'sr', 'article_topics');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/comments.ps.yml'), 'ps', 'comments');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_types.ko.yml'), 'ko', 'article_types');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/support.hy.yml'), 'hy', 'support');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/plugins_manager.ru.yml'), 'ru', 'plugins_manager');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/plugins.az.yml'), 'az', 'plugins');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/new_comments.pa.yml'), 'pa', 'new_comments');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/api.uk.yml'), 'uk', 'api');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/comments.fa.yml'), 'fa', 'comments');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/pub.cs.yml'), 'cs', 'pub');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/authors.id.yml'), 'id', 'authors');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/tiny_media_plugin.pt.yml'), 'pt', 'tiny_media_plugin');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/topics.hy_AM.yml'), 'hy_AM', 'topics');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/plugins.pt.yml'), 'pt', 'plugins');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/topics.id.yml'), 'id', 'topics');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/country.id.yml'), 'id', 'country');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/sections.fa.yml'), 'fa', 'sections');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/plugins.ar.yml'), 'ar', 'plugins');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/geolocation.hy.yml'), 'hy', 'geolocation');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/new_comments.es.yml'), 'es', 'new_comments');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/messages.pa.yml'), 'pa', 'messages');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/logs.be.yml'), 'be', 'logs');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/sections.sr.yml'), 'sr', 'sections');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/country.nb_NO.yml'), 'nb_NO', 'country');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/help.pt_BR.yml'), 'pt_BR', 'help');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/library.en.yml'), 'en', 'library');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/topics.zh.yml'), 'zh', 'topics');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_types.tr.yml'), 'tr', 'article_types');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/new_comments.zh_TW.yml'), 'zh_TW', 'new_comments');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/plugins_manager.el.yml'), 'el', 'plugins_manager');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/messages.bn.yml'), 'bn', 'messages');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_topics.de_AT.yml'), 'de_AT', 'article_topics');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/articles.ps.yml'), 'ps', 'articles');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/validators.he.yml'), 'he', 'validators');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/preview.fa_AF.yml'), 'fa_AF', 'preview');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_files.ro.yml'), 'ro', 'article_files');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/articles.sq.yml'), 'sq', 'articles');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/home.sq.yml'), 'sq', 'home');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/country.az.yml'), 'az', 'country');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/help.el.yml'), 'el', 'help');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/plugins_manager.hu.yml'), 'hu', 'plugins_manager');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/articles.ru.yml'), 'ru', 'articles');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_files.es_AR.yml'), 'es_AR', 'article_files');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/pub.uk.yml'), 'uk', 'pub');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/home.pt_BR.yml'), 'pt_BR', 'home');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_types.hy_AM.yml'), 'hy_AM', 'article_types');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/helpers.bn.yml'), 'bn', 'helpers');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/themes.ka.yml'), 'ka', 'themes');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_type_fields.de_AT.yml'), 'de_AT', 'article_type_fields');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/extensions.id.yml'), 'id', 'extensions');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/languages.de.yml'), 'de', 'languages');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/new_comments.cs.yml'), 'cs', 'new_comments');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/messages.sh.yml'), 'sh', 'messages');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/preview.ro.yml'), 'ro', 'preview');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/new_comments.sr.yml'), 'sr', 'new_comments');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/users.pa.yml'), 'pa', 'users');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/themes.be.yml'), 'be', 'themes');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/logs.pl.yml'), 'pl', 'logs');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_images.pl.yml'), 'pl', 'article_images');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/sections.bn.yml'), 'bn', 'sections');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/tiny_media_plugin.tr.yml'), 'tr', 'tiny_media_plugin');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_types.id.yml'), 'id', 'article_types');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/sections.de_AT.yml'), 'de_AT', 'sections');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/validators.en_GB.yml'), 'en_GB', 'validators');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/library.de_AT.yml'), 'de_AT', 'library');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/tiny_media_plugin.nl.yml'), 'nl', 'tiny_media_plugin');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/support.hy_AM.yml'), 'hy_AM', 'support');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/languages.bn.yml'), 'bn', 'languages');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/messages.tr.yml'), 'tr', 'messages');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/tiny_media_plugin.id.yml'), 'id', 'tiny_media_plugin');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/comments.ku.yml'), 'ku', 'comments');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/messages.en_GB.yml'), 'en_GB', 'messages');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/messages.es_AR.yml'), 'es_AR', 'messages');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/media_archive.ro.yml'), 'ro', 'media_archive');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_images.uk.yml'), 'uk', 'article_images');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_images.id.yml'), 'id', 'article_images');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/themes.el.yml'), 'el', 'themes');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/languages.ar.yml'), 'ar', 'languages');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_type_fields.es_AR.yml'), 'es_AR', 'article_type_fields');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/extensions.es_AR.yml'), 'es_AR', 'extensions');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/messages.he.yml'), 'he', 'messages');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/system_pref.ku.yml'), 'ku', 'system_pref');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/home.ps.yml'), 'ps', 'home');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_type_fields.sq.yml'), 'sq', 'article_type_fields');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/extensions.tr.yml'), 'tr', 'extensions');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/bug_reporting.nb_NO.yml'), 'nb_NO', 'bug_reporting');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/validators.hr.yml'), 'hr', 'validators');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/feedback.sq.yml'), 'sq', 'feedback');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/authors.da.yml'), 'da', 'authors');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/logs.de_AT.yml'), 'de_AT', 'logs');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/extensions.zh.yml'), 'zh', 'extensions');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/media_archive.pt_BR.yml'), 'pt_BR', 'media_archive');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/system_pref.ko.yml'), 'ko', 'system_pref');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/helpers.az.yml'), 'az', 'helpers');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_comments.pt.yml'), 'pt', 'article_comments');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/extensions.sv.yml'), 'sv', 'extensions');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/topics.ru.yml'), 'ru', 'topics');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_comments.hr.yml'), 'hr', 'article_comments');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/help.en_GB.yml'), 'en_GB', 'help');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/library.ru.yml'), 'ru', 'library');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/plugins.es.yml'), 'es', 'plugins');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/feedback.hy.yml'), 'hy', 'feedback');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_files.sr.yml'), 'sr', 'article_files');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/logs.fr.yml'), 'fr', 'logs');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/preview.ar.yml'), 'ar', 'preview');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/messages.fr.yml'), 'fr', 'messages');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/api.id.yml'), 'id', 'api');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_comments.zh_TW.yml'), 'zh_TW', 'article_comments');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/helpers.hy_AM.yml'), 'hy_AM', 'helpers');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/plugins_manager.pt.yml'), 'pt', 'plugins_manager');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/languages.hr.yml'), 'hr', 'languages');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/messages.sq.yml'), 'sq', 'messages');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/feedback.el.yml'), 'el', 'feedback');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/user_types.de.yml'), 'de', 'user_types');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_type_fields.tr.yml'), 'tr', 'article_type_fields');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/library.ro.yml'), 'ro', 'library');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/user_subscriptions.hy_AM.yml'), 'hy_AM', 'user_subscriptions');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/comments.hy_AM.yml'), 'hy_AM', 'comments');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/home.es_AR.yml'), 'es_AR', 'home');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/user_types.hr.yml'), 'hr', 'user_types');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_topics.nl.yml'), 'nl', 'article_topics');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/api.sv.yml'), 'sv', 'api');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/extensions.az.yml'), 'az', 'extensions');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/helpers.hr.yml'), 'hr', 'helpers');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/library.da.yml'), 'da', 'library');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/tiny_media_plugin.hr.yml'), 'hr', 'tiny_media_plugin');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/validators.hu.yml'), 'hu', 'validators');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/new_comments.uk.yml'), 'uk', 'new_comments');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_topics.fr.yml'), 'fr', 'article_topics');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/new_comments.fr.yml'), 'fr', 'new_comments');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/system_pref.ar.yml'), 'ar', 'system_pref');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/preview.sh.yml'), 'sh', 'preview');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_types.ru.yml'), 'ru', 'article_types');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_images.hy_AM.yml'), 'hy_AM', 'article_images');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/geolocation.sr.yml'), 'sr', 'geolocation');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/themes.pt_BR.yml'), 'pt_BR', 'themes');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/user_subscriptions.es_AR.yml'), 'es_AR', 'user_subscriptions');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/new_comments.be.yml'), 'be', 'new_comments');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/sections.nl.yml'), 'nl', 'sections');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_images.sq.yml'), 'sq', 'article_images');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/validators.id.yml'), 'id', 'validators');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/articles.nl.yml'), 'nl', 'articles');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/sections.hu.yml'), 'hu', 'sections');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/topics.uk.yml'), 'uk', 'topics');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/api.fa_AF.yml'), 'fa_AF', 'api');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/library.el.yml'), 'el', 'library');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/helpers.sr.yml'), 'sr', 'helpers');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/extensions.he.yml'), 'he', 'extensions');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/geolocation.tr.yml'), 'tr', 'geolocation');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/pub.bn.yml'), 'bn', 'pub');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/authors.tr.yml'), 'tr', 'authors');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/messages.be.yml'), 'be', 'messages');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/comments.pl.yml'), 'pl', 'comments');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/user_subscription_sections.bn.yml'), 'bn', 'user_subscription_sections');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/authors.sv.yml'), 'sv', 'authors');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/country.uk.yml'), 'uk', 'country');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/feedback.fr.yml'), 'fr', 'feedback');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/comments.fa_AF.yml'), 'fa_AF', 'comments');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/helpers.pa.yml'), 'pa', 'helpers');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/languages.fa.yml'), 'fa', 'languages');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/user_types.sh.yml'), 'sh', 'user_types');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/support.fr.yml'), 'fr', 'support');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/system_pref.fa.yml'), 'fa', 'system_pref');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/bug_reporting.cs.yml'), 'cs', 'bug_reporting');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/themes.ru.yml'), 'ru', 'themes');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_type_fields.az.yml'), 'az', 'article_type_fields');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/issues.hu.yml'), 'hu', 'issues');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/validators.ps.yml'), 'ps', 'validators');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_images.pa.yml'), 'pa', 'article_images');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/sections.sv.yml'), 'sv', 'sections');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/articles.cs.yml'), 'cs', 'articles');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/topics.zh_TW.yml'), 'zh_TW', 'topics');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/topics.hr.yml'), 'hr', 'topics');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/validators.es.yml'), 'es', 'validators');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/country.es.yml'), 'es', 'country');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/country.sv.yml'), 'sv', 'country');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/articles.az.yml'), 'az', 'articles');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/tiny_media_plugin.sv.yml'), 'sv', 'tiny_media_plugin');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/issues.id.yml'), 'id', 'issues');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/new_comments.ru.yml'), 'ru', 'new_comments');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_comments.ro.yml'), 'ro', 'article_comments');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/user_types.zh.yml'), 'zh', 'user_types');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/plugins.pa.yml'), 'pa', 'plugins');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/authors.sh.yml'), 'sh', 'authors');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/feedback.ar.yml'), 'ar', 'feedback');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/bug_reporting.id.yml'), 'id', 'bug_reporting');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/themes.es.yml'), 'es', 'themes');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/messages.uk.yml'), 'uk', 'messages');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/helpers.de_AT.yml'), 'de_AT', 'helpers');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_comments.da.yml'), 'da', 'article_comments');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/home.fa_AF.yml'), 'fa_AF', 'home');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/new_comments.nb_NO.yml'), 'nb_NO', 'new_comments');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/media_archive.el.yml'), 'el', 'media_archive');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_files.nl.yml'), 'nl', 'article_files');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/home.hy_AM.yml'), 'hy_AM', 'home');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_type_fields.en_GB.yml'), 'en_GB', 'article_type_fields');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/tiny_media_plugin.pl.yml'), 'pl', 'tiny_media_plugin');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/helpers.cs.yml'), 'cs', 'helpers');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/languages.tr.yml'), 'tr', 'languages');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_type_fields.nb_NO.yml'), 'nb_NO', 'article_type_fields');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/helpers.hu.yml'), 'hu', 'helpers');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/feedback.sr.yml'), 'sr', 'feedback');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/plugins_manager.az.yml'), 'az', 'plugins_manager');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/issues.fa_AF.yml'), 'fa_AF', 'issues');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/plugins_manager.zh_TW.yml'), 'zh_TW', 'plugins_manager');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_types.da.yml'), 'da', 'article_types');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_type_fields.fa_AF.yml'), 'fa_AF', 'article_type_fields');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/system_pref.fa_AF.yml'), 'fa_AF', 'system_pref');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/new_comments.sq.yml'), 'sq', 'new_comments');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_topics.tr.yml'), 'tr', 'article_topics');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/validators.nb_NO.yml'), 'nb_NO', 'validators');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/api.tr.yml'), 'tr', 'api');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/validators.pt.yml'), 'pt', 'validators');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/languages.en_GB.yml'), 'en_GB', 'languages');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_topics.id.yml'), 'id', 'article_topics');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/user_types.fa_AF.yml'), 'fa_AF', 'user_types');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_type_fields.sh.yml'), 'sh', 'article_type_fields');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_types.az.yml'), 'az', 'article_types');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/preview.sq.yml'), 'sq', 'preview');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/pub.hy.yml'), 'hy', 'pub');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/library.he.yml'), 'he', 'library');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/authors.de_AT.yml'), 'de_AT', 'authors');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/users.tr.yml'), 'tr', 'users');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/bug_reporting.fr.yml'), 'fr', 'bug_reporting');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/pub.pa.yml'), 'pa', 'pub');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_types.bn.yml'), 'bn', 'article_types');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/validators.hy_AM.yml'), 'hy_AM', 'validators');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/topics.ka.yml'), 'ka', 'topics');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/tiny_media_plugin.zh_TW.yml'), 'zh_TW', 'tiny_media_plugin');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/library.ku.yml'), 'ku', 'library');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_comments.ko.yml'), 'ko', 'article_comments');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/languages.nl.yml'), 'nl', 'languages');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/tiny_media_plugin.da.yml'), 'da', 'tiny_media_plugin');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_images.sh.yml'), 'sh', 'article_images');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/media_archive.da.yml'), 'da', 'media_archive');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/topics.es_AR.yml'), 'es_AR', 'topics');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/comments.ka.yml'), 'ka', 'comments');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/issues.en_GB.yml'), 'en_GB', 'issues');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/comments.zh_TW.yml'), 'zh_TW', 'comments');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/user_subscription_sections.pa.yml'), 'pa', 'user_subscription_sections');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_type_fields.hr.yml'), 'hr', 'article_type_fields');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/logs.ar.yml'), 'ar', 'logs');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/bug_reporting.he.yml'), 'he', 'bug_reporting');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/plugins.tr.yml'), 'tr', 'plugins');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/languages.ro.yml'), 'ro', 'languages');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/geolocation.da.yml'), 'da', 'geolocation');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/themes.hr.yml'), 'hr', 'themes');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_images.en_GB.yml'), 'en_GB', 'article_images');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_topics.hu.yml'), 'hu', 'article_topics');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_types.zh_TW.yml'), 'zh_TW', 'article_types');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/plugins_manager.hr.yml'), 'hr', 'plugins_manager');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/bug_reporting.pt.yml'), 'pt', 'bug_reporting');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/themes.hy.yml'), 'hy', 'themes');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/articles.pa.yml'), 'pa', 'articles');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/media_archive.he.yml'), 'he', 'media_archive');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/comments.da.yml'), 'da', 'comments');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/comments.tr.yml'), 'tr', 'comments');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/sections.pl.yml'), 'pl', 'sections');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/issues.es_AR.yml'), 'es_AR', 'issues');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_comments.id.yml'), 'id', 'article_comments');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/preview.ru.yml'), 'ru', 'preview');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/authors.nb_NO.yml'), 'nb_NO', 'authors');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/topics.ko.yml'), 'ko', 'topics');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/user_subscription_sections.hu.yml'), 'hu', 'user_subscription_sections');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/user_types.ko.yml'), 'ko', 'user_types');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/country.ro.yml'), 'ro', 'country');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/user_subscription_sections.cs.yml'), 'cs', 'user_subscription_sections');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/issues.ka.yml'), 'ka', 'issues');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_topics.he.yml'), 'he', 'article_topics');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/user_subscription_sections.be.yml'), 'be', 'user_subscription_sections');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/articles.da.yml'), 'da', 'articles');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/new_comments.fa.yml'), 'fa', 'new_comments');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/helpers.sh.yml'), 'sh', 'helpers');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/issues.ko.yml'), 'ko', 'issues');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/user_subscriptions.ps.yml'), 'ps', 'user_subscriptions');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/pub.id.yml'), 'id', 'pub');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/pub.fa_AF.yml'), 'fa_AF', 'pub');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/themes.zh.yml'), 'zh', 'themes');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/user_types.en.yml'), 'en', 'user_types');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/feedback.pt_BR.yml'), 'pt_BR', 'feedback');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/country.zh.yml'), 'zh', 'country');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/issues.ro.yml'), 'ro', 'issues');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/user_types.pt.yml'), 'pt', 'user_types');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_images.ku.yml'), 'ku', 'article_images');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/help.fa.yml'), 'fa', 'help');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/pub.nb_NO.yml'), 'nb_NO', 'pub');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_topics.ku.yml'), 'ku', 'article_topics');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/messages.nb_NO.yml'), 'nb_NO', 'messages');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/sections.en.yml'), 'en', 'sections');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/media_archive.es_AR.yml'), 'es_AR', 'media_archive');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/preview.en_GB.yml'), 'en_GB', 'preview');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/logs.ro.yml'), 'ro', 'logs');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/issues.zh.yml'), 'zh', 'issues');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/articles.it.yml'), 'it', 'articles');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/home.ko.yml'), 'ko', 'home');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/extensions.uk.yml'), 'uk', 'extensions');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_images.fa.yml'), 'fa', 'article_images');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/sections.fr.yml'), 'fr', 'sections');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/system_pref.uk.yml'), 'uk', 'system_pref');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/preview.hy.yml'), 'hy', 'preview');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_topics.ko.yml'), 'ko', 'article_topics');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/user_subscription_sections.sr.yml'), 'sr', 'user_subscription_sections');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/users.da.yml'), 'da', 'users');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/issues.sr.yml'), 'sr', 'issues');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/sections.da.yml'), 'da', 'sections');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/issues.cs.yml'), 'cs', 'issues');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/support.az.yml'), 'az', 'support');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/user_subscriptions.de_AT.yml'), 'de_AT', 'user_subscriptions');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_comments.ru.yml'), 'ru', 'article_comments');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/issues.be.yml'), 'be', 'issues');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/themes.sr.yml'), 'sr', 'themes');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/user_types.id.yml'), 'id', 'user_types');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_type_fields.nl.yml'), 'nl', 'article_type_fields');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_topics.bn.yml'), 'bn', 'article_topics');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/support.es.yml'), 'es', 'support');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/validators.tr.yml'), 'tr', 'validators');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/feedback.fa.yml'), 'fa', 'feedback');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/api.es.yml'), 'es', 'api');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_images.ko.yml'), 'ko', 'article_images');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/user_subscriptions.he.yml'), 'he', 'user_subscriptions');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/pub.pl.yml'), 'pl', 'pub');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/extensions.ko.yml'), 'ko', 'extensions');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/logs.es_AR.yml'), 'es_AR', 'logs');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_type_fields.ar.yml'), 'ar', 'article_type_fields');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/country.fa_AF.yml'), 'fa_AF', 'country');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/tiny_media_plugin.cs.yml'), 'cs', 'tiny_media_plugin');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/country.nl.yml'), 'nl', 'country');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/messages.de_AT.yml'), 'de_AT', 'messages');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/articles.de.yml'), 'de', 'articles');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/plugins_manager.it.yml'), 'it', 'plugins_manager');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_files.ps.yml'), 'ps', 'article_files');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/tiny_media_plugin.ps.yml'), 'ps', 'tiny_media_plugin');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/themes.fa_AF.yml'), 'fa_AF', 'themes');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/authors.he.yml'), 'he', 'authors');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_images.be.yml'), 'be', 'article_images');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/extensions.cs.yml'), 'cs', 'extensions');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/preview.ps.yml'), 'ps', 'preview');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/user_subscriptions.pl.yml'), 'pl', 'user_subscriptions');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/logs.sv.yml'), 'sv', 'logs');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/plugins_manager.sr.yml'), 'sr', 'plugins_manager');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/user_types.hy_AM.yml'), 'hy_AM', 'user_types');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/new_comments.hu.yml'), 'hu', 'new_comments');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/bug_reporting.zh.yml'), 'zh', 'bug_reporting');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/bug_reporting.da.yml'), 'da', 'bug_reporting');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_type_fields.it.yml'), 'it', 'article_type_fields');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/articles.fr.yml'), 'fr', 'articles');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/help.ka.yml'), 'ka', 'help');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/languages.fa_AF.yml'), 'fa_AF', 'languages');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/topics.sq.yml'), 'sq', 'topics');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/support.ko.yml'), 'ko', 'support');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/user_types.ku.yml'), 'ku', 'user_types');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/issues.sq.yml'), 'sq', 'issues');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/user_types.da.yml'), 'da', 'user_types');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_type_fields.he.yml'), 'he', 'article_type_fields');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/support.sq.yml'), 'sq', 'support');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_type_fields.zh.yml'), 'zh', 'article_type_fields');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/feedback.de.yml'), 'de', 'feedback');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/helpers.zh.yml'), 'zh', 'helpers');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/library.es_AR.yml'), 'es_AR', 'library');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/plugins_manager.fa.yml'), 'fa', 'plugins_manager');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/user_subscription_sections.en.yml'), 'en', 'user_subscription_sections');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/system_pref.fr.yml'), 'fr', 'system_pref');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/feedback.zh.yml'), 'zh', 'feedback');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/topics.hu.yml'), 'hu', 'topics');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/country.el.yml'), 'el', 'country');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/languages.ru.yml'), 'ru', 'languages');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/comments.zh.yml'), 'zh', 'comments');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/geolocation.be.yml'), 'be', 'geolocation');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/themes.ro.yml'), 'ro', 'themes');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/articles.en.yml'), 'en', 'articles');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/messages.ko.yml'), 'ko', 'messages');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/issues.de.yml'), 'de', 'issues');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/logs.nb_NO.yml'), 'nb_NO', 'logs');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/system_pref.ps.yml'), 'ps', 'system_pref');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_topics.ar.yml'), 'ar', 'article_topics');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/pub.de_AT.yml'), 'de_AT', 'pub');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/user_subscription_sections.es_AR.yml'), 'es_AR', 'user_subscription_sections');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_type_fields.en.yml'), 'en', 'article_type_fields');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_images.ps.yml'), 'ps', 'article_images');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/plugins.hu.yml'), 'hu', 'plugins');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/themes.tr.yml'), 'tr', 'themes');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/tiny_media_plugin.es.yml'), 'es', 'tiny_media_plugin');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/topics.nb_NO.yml'), 'nb_NO', 'topics');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/plugins.da.yml'), 'da', 'plugins');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/user_subscriptions.it.yml'), 'it', 'user_subscriptions');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/messages.zh_TW.yml'), 'zh_TW', 'messages');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_images.hr.yml'), 'hr', 'article_images');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_types.es.yml'), 'es', 'article_types');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/articles.ar.yml'), 'ar', 'articles');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/pub.az.yml'), 'az', 'pub');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/user_subscription_sections.de_AT.yml'), 'de_AT', 'user_subscription_sections');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/preview.zh.yml'), 'zh', 'preview');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_comments.it.yml'), 'it', 'article_comments');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/feedback.he.yml'), 'he', 'feedback');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/helpers.fa.yml'), 'fa', 'helpers');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/plugins.id.yml'), 'id', 'plugins');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/media_archive.de.yml'), 'de', 'media_archive');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/authors.nl.yml'), 'nl', 'authors');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/media_archive.hr.yml'), 'hr', 'media_archive');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/authors.zh.yml'), 'zh', 'authors');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/support.ka.yml'), 'ka', 'support');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_type_fields.hy_AM.yml'), 'hy_AM', 'article_type_fields');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/home.ku.yml'), 'ku', 'home');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/country.en.yml'), 'en', 'country');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_type_fields.ru.yml'), 'ru', 'article_type_fields');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/helpers.sv.yml'), 'sv', 'helpers');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_type_fields.fa.yml'), 'fa', 'article_type_fields');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/media_archive.ar.yml'), 'ar', 'media_archive');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/logs.el.yml'), 'el', 'logs');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/topics.be.yml'), 'be', 'topics');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/languages.hy.yml'), 'hy', 'languages');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_topics.pl.yml'), 'pl', 'article_topics');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_files.es.yml'), 'es', 'article_files');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/users.id.yml'), 'id', 'users');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/extensions.fa.yml'), 'fa', 'extensions');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_type_fields.hu.yml'), 'hu', 'article_type_fields');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/feedback.sh.yml'), 'sh', 'feedback');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/users.ro.yml'), 'ro', 'users');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/plugins_manager.id.yml'), 'id', 'plugins_manager');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/new_comments.pt.yml'), 'pt', 'new_comments');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/messages.fa.yml'), 'fa', 'messages');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/topics.tr.yml'), 'tr', 'topics');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_comments.pl.yml'), 'pl', 'article_comments');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/help.da.yml'), 'da', 'help');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/topics.sh.yml'), 'sh', 'topics');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_types.it.yml'), 'it', 'article_types');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/user_subscriptions.ar.yml'), 'ar', 'user_subscriptions');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/country.ru.yml'), 'ru', 'country');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/help.hu.yml'), 'hu', 'help');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/logs.sh.yml'), 'sh', 'logs');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/system_pref.cs.yml'), 'cs', 'system_pref');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/plugins_manager.nl.yml'), 'nl', 'plugins_manager');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/preview.es_AR.yml'), 'es_AR', 'preview');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_comments.sh.yml'), 'sh', 'article_comments');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/validators.nl.yml'), 'nl', 'validators');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/bug_reporting.pl.yml'), 'pl', 'bug_reporting');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/feedback.it.yml'), 'it', 'feedback');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/plugins.zh.yml'), 'zh', 'plugins');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/media_archive.pt.yml'), 'pt', 'media_archive');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/preview.ka.yml'), 'ka', 'preview');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/new_comments.hy_AM.yml'), 'hy_AM', 'new_comments');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/tiny_media_plugin.hy.yml'), 'hy', 'tiny_media_plugin');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/feedback.en_GB.yml'), 'en_GB', 'feedback');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/user_subscription_sections.el.yml'), 'el', 'user_subscription_sections');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/plugins.sr.yml'), 'sr', 'plugins');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/plugins_manager.ko.yml'), 'ko', 'plugins_manager');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/preview.ku.yml'), 'ku', 'preview');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/authors.pt.yml'), 'pt', 'authors');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/system_pref.hy_AM.yml'), 'hy_AM', 'system_pref');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/support.nb_NO.yml'), 'nb_NO', 'support');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/messages.hu.yml'), 'hu', 'messages');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_types.sr.yml'), 'sr', 'article_types');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/api.en_GB.yml'), 'en_GB', 'api');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/authors.az.yml'), 'az', 'authors');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/themes.es_AR.yml'), 'es_AR', 'themes');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/new_comments.it.yml'), 'it', 'new_comments');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/plugins_manager.pa.yml'), 'pa', 'plugins_manager');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/support.id.yml'), 'id', 'support');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/comments.ko.yml'), 'ko', 'comments');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/plugins_manager.fa_AF.yml'), 'fa_AF', 'plugins_manager');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/help.nb_NO.yml'), 'nb_NO', 'help');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/validators.it.yml'), 'it', 'validators');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/user_subscription_sections.fa_AF.yml'), 'fa_AF', 'user_subscription_sections');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/country.hy.yml'), 'hy', 'country');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_images.de.yml'), 'de', 'article_images');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/geolocation.ka.yml'), 'ka', 'geolocation');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/system_pref.sr.yml'), 'sr', 'system_pref');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/library.cs.yml'), 'cs', 'library');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/authors.ps.yml'), 'ps', 'authors');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_topics.it.yml'), 'it', 'article_topics');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/authors.be.yml'), 'be', 'authors');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/country.it.yml'), 'it', 'country');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/bug_reporting.pa.yml'), 'pa', 'bug_reporting');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/preview.bn.yml'), 'bn', 'preview');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/languages.zh_TW.yml'), 'zh_TW', 'languages');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/comments.es.yml'), 'es', 'comments');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_types.pa.yml'), 'pa', 'article_types');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/api.hu.yml'), 'hu', 'api');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_files.en_GB.yml'), 'en_GB', 'article_files');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/country.cs.yml'), 'cs', 'country');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/geolocation.bn.yml'), 'bn', 'geolocation');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/library.sr.yml'), 'sr', 'library');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/articles.hr.yml'), 'hr', 'articles');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_files.bn.yml'), 'bn', 'article_files');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/articles.tr.yml'), 'tr', 'articles');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/support.it.yml'), 'it', 'support');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/feedback.fa_AF.yml'), 'fa_AF', 'feedback');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_files.id.yml'), 'id', 'article_files');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/country.ar.yml'), 'ar', 'country');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/library.be.yml'), 'be', 'library');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/comments.id.yml'), 'id', 'comments');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/api.pt.yml'), 'pt', 'api');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/plugins.nb_NO.yml'), 'nb_NO', 'plugins');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/user_subscription_sections.sv.yml'), 'sv', 'user_subscription_sections');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/pub.ro.yml'), 'ro', 'pub');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/authors.cs.yml'), 'cs', 'authors');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/user_subscription_sections.zh_TW.yml'), 'zh_TW', 'user_subscription_sections');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/pub.sq.yml'), 'sq', 'pub');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/user_types.hy.yml'), 'hy', 'user_types');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/geolocation.de_AT.yml'), 'de_AT', 'geolocation');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/support.sh.yml'), 'sh', 'support');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/extensions.zh_TW.yml'), 'zh_TW', 'extensions');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/library.fa_AF.yml'), 'fa_AF', 'library');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/help.pl.yml'), 'pl', 'help');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_images.zh_TW.yml'), 'zh_TW', 'article_images');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/geolocation.pl.yml'), 'pl', 'geolocation');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_topics.el.yml'), 'el', 'article_topics');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/authors.zh_TW.yml'), 'zh_TW', 'authors');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/plugins.el.yml'), 'el', 'plugins');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/messages.it.yml'), 'it', 'messages');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/comments.ar.yml'), 'ar', 'comments');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/helpers.de.yml'), 'de', 'helpers');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/help.be.yml'), 'be', 'help');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/plugins.ru.yml'), 'ru', 'plugins');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_images.zh.yml'), 'zh', 'article_images');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/helpers.be.yml'), 'be', 'helpers');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/new_comments.ka.yml'), 'ka', 'new_comments');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/user_subscription_sections.pl.yml'), 'pl', 'user_subscription_sections');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/feedback.ko.yml'), 'ko', 'feedback');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/system_pref.bn.yml'), 'bn', 'system_pref');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_types.hy.yml'), 'hy', 'article_types');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/user_subscription_sections.ro.yml'), 'ro', 'user_subscription_sections');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/support.es_AR.yml'), 'es_AR', 'support');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_images.sv.yml'), 'sv', 'article_images');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/sections.sq.yml'), 'sq', 'sections');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/support.zh.yml'), 'zh', 'support');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/sections.pa.yml'), 'pa', 'sections');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/bug_reporting.hy_AM.yml'), 'hy_AM', 'bug_reporting');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/helpers.ka.yml'), 'ka', 'helpers');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/users.fr.yml'), 'fr', 'users');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_topics.be.yml'), 'be', 'article_topics');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/sections.ro.yml'), 'ro', 'sections');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_type_fields.ku.yml'), 'ku', 'article_type_fields');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/bug_reporting.be.yml'), 'be', 'bug_reporting');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/library.hy_AM.yml'), 'hy_AM', 'library');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/themes.da.yml'), 'da', 'themes');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/user_subscriptions.zh.yml'), 'zh', 'user_subscriptions');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/library.sq.yml'), 'sq', 'library');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_comments.es.yml'), 'es', 'article_comments');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/help.id.yml'), 'id', 'help');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/system_pref.id.yml'), 'id', 'system_pref');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/pub.hr.yml'), 'hr', 'pub');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/sections.pt.yml'), 'pt', 'sections');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/user_subscriptions.tr.yml'), 'tr', 'user_subscriptions');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_types.pl.yml'), 'pl', 'article_types');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/users.be.yml'), 'be', 'users');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/feedback.sv.yml'), 'sv', 'feedback');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/themes.ko.yml'), 'ko', 'themes');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/extensions.ku.yml'), 'ku', 'extensions');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/articles.ro.yml'), 'ro', 'articles');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/languages.uk.yml'), 'uk', 'languages');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/user_types.ar.yml'), 'ar', 'user_types');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/helpers.ku.yml'), 'ku', 'helpers');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/users.hr.yml'), 'hr', 'users');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/geolocation.de.yml'), 'de', 'geolocation');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/plugins_manager.en.yml'), 'en', 'plugins_manager');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/support.ku.yml'), 'ku', 'support');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/preview.es.yml'), 'es', 'preview');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_types.de_AT.yml'), 'de_AT', 'article_types');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/help.sr.yml'), 'sr', 'help');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/bug_reporting.zh_TW.yml'), 'zh_TW', 'bug_reporting');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/feedback.hr.yml'), 'hr', 'feedback');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_topics.es_AR.yml'), 'es_AR', 'article_topics');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/messages.cs.yml'), 'cs', 'messages');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/feedback.nl.yml'), 'nl', 'feedback');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_type_fields.ro.yml'), 'ro', 'article_type_fields');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/messages.da.yml'), 'da', 'messages');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/user_subscriptions.sq.yml'), 'sq', 'user_subscriptions');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/feedback.da.yml'), 'da', 'feedback');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/tiny_media_plugin.hy_AM.yml'), 'hy_AM', 'tiny_media_plugin');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/preview.it.yml'), 'it', 'preview');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/plugins.en_GB.yml'), 'en_GB', 'plugins');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/extensions.el.yml'), 'el', 'extensions');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/support.ru.yml'), 'ru', 'support');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/helpers.nl.yml'), 'nl', 'helpers');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/user_subscription_sections.sh.yml'), 'sh', 'user_subscription_sections');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_type_fields.uk.yml'), 'uk', 'article_type_fields');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/issues.uk.yml'), 'uk', 'issues');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_comments.bn.yml'), 'bn', 'article_comments');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/country.sq.yml'), 'sq', 'country');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/languages.pt.yml'), 'pt', 'languages');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/help.it.yml'), 'it', 'help');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/new_comments.ro.yml'), 'ro', 'new_comments');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/helpers.pt.yml'), 'pt', 'helpers');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/plugins.hy_AM.yml'), 'hy_AM', 'plugins');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/preview.pl.yml'), 'pl', 'preview');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/plugins.bn.yml'), 'bn', 'plugins');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_images.da.yml'), 'da', 'article_images');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_images.he.yml'), 'he', 'article_images');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/media_archive.en_GB.yml'), 'en_GB', 'media_archive');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/plugins.pl.yml'), 'pl', 'plugins');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/plugins.he.yml'), 'he', 'plugins');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/issues.sv.yml'), 'sv', 'issues');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_type_fields.fr.yml'), 'fr', 'article_type_fields');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/languages.pa.yml'), 'pa', 'languages');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/user_subscriptions.az.yml'), 'az', 'user_subscriptions');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/sections.es_AR.yml'), 'es_AR', 'sections');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/tiny_media_plugin.ro.yml'), 'ro', 'tiny_media_plugin');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/pub.fa.yml'), 'fa', 'pub');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/issues.tr.yml'), 'tr', 'issues');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_comments.de_AT.yml'), 'de_AT', 'article_comments');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/comments.sr.yml'), 'sr', 'comments');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/media_archive.it.yml'), 'it', 'media_archive');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/api.hr.yml'), 'hr', 'api');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_comments.sr.yml'), 'sr', 'article_comments');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/plugins_manager.en_GB.yml'), 'en_GB', 'plugins_manager');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/helpers.fa_AF.yml'), 'fa_AF', 'helpers');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/preview.el.yml'), 'el', 'preview');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/comments.sq.yml'), 'sq', 'comments');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/logs.bn.yml'), 'bn', 'logs');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_type_fields.zh_TW.yml'), 'zh_TW', 'article_type_fields');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/plugins_manager.hy_AM.yml'), 'hy_AM', 'plugins_manager');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/plugins.fa_AF.yml'), 'fa_AF', 'plugins');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/help.uk.yml'), 'uk', 'help');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/feedback.ro.yml'), 'ro', 'feedback');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/logs.fa_AF.yml'), 'fa_AF', 'logs');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/user_subscriptions.nl.yml'), 'nl', 'user_subscriptions');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/logs.pt_BR.yml'), 'pt_BR', 'logs');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_images.ka.yml'), 'ka', 'article_images');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/user_types.es.yml'), 'es', 'user_types');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/preview.da.yml'), 'da', 'preview');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/plugins.pt_BR.yml'), 'pt_BR', 'plugins');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/home.pa.yml'), 'pa', 'home');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/system_pref.da.yml'), 'da', 'system_pref');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/tiny_media_plugin.ru.yml'), 'ru', 'tiny_media_plugin');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/users.hu.yml'), 'hu', 'users');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_types.hu.yml'), 'hu', 'article_types');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/pub.pt_BR.yml'), 'pt_BR', 'pub');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/home.bn.yml'), 'bn', 'home');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/helpers.el.yml'), 'el', 'helpers');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/preview.az.yml'), 'az', 'preview');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/languages.ko.yml'), 'ko', 'languages');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_comments.he.yml'), 'he', 'article_comments');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/issues.hy.yml'), 'hy', 'issues');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/system_pref.he.yml'), 'he', 'system_pref');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_types.el.yml'), 'el', 'article_types');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_types.ro.yml'), 'ro', 'article_types');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/system_pref.zh_TW.yml'), 'zh_TW', 'system_pref');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/bug_reporting.sr.yml'), 'sr', 'bug_reporting');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/languages.es_AR.yml'), 'es_AR', 'languages');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/user_types.sq.yml'), 'sq', 'user_types');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/user_subscription_sections.fr.yml'), 'fr', 'user_subscription_sections');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/support.hr.yml'), 'hr', 'support');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/country.he.yml'), 'he', 'country');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/media_archive.fr.yml'), 'fr', 'media_archive');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/extensions.nb_NO.yml'), 'nb_NO', 'extensions');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/languages.hu.yml'), 'hu', 'languages');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/system_pref.be.yml'), 'be', 'system_pref');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/helpers.es.yml'), 'es', 'helpers');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/help.nl.yml'), 'nl', 'help');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/languages.en.yml'), 'en', 'languages');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/plugins.ku.yml'), 'ku', 'plugins');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/themes.ps.yml'), 'ps', 'themes');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/topics.de_AT.yml'), 'de_AT', 'topics');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_types.ps.yml'), 'ps', 'article_types');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/authors.pl.yml'), 'pl', 'authors');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/comments.bn.yml'), 'bn', 'comments');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/comments.sv.yml'), 'sv', 'comments');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/topics.sv.yml'), 'sv', 'topics');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/user_types.tr.yml'), 'tr', 'user_types');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/media_archive.cs.yml'), 'cs', 'media_archive');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_topics.en_GB.yml'), 'en_GB', 'article_topics');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/issues.ru.yml'), 'ru', 'issues');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/system_pref.az.yml'), 'az', 'system_pref');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/bug_reporting.hu.yml'), 'hu', 'bug_reporting');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/pub.sr.yml'), 'sr', 'pub');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/country.pl.yml'), 'pl', 'country');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/home.ar.yml'), 'ar', 'home');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/issues.it.yml'), 'it', 'issues');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/new_comments.sh.yml'), 'sh', 'new_comments');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/library.pt_BR.yml'), 'pt_BR', 'library');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/home.nl.yml'), 'nl', 'home');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/user_subscription_sections.ka.yml'), 'ka', 'user_subscription_sections');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_topics.az.yml'), 'az', 'article_topics');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/tiny_media_plugin.sq.yml'), 'sq', 'tiny_media_plugin');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_comments.ar.yml'), 'ar', 'article_comments');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_files.tr.yml'), 'tr', 'article_files');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/themes.de_AT.yml'), 'de_AT', 'themes');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/library.pa.yml'), 'pa', 'library');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/articles.sh.yml'), 'sh', 'articles');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/preview.de.yml'), 'de', 'preview');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/sections.cs.yml'), 'cs', 'sections');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/geolocation.ar.yml'), 'ar', 'geolocation');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/media_archive.ka.yml'), 'ka', 'media_archive');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/plugins.en.yml'), 'en', 'plugins');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/authors.es.yml'), 'es', 'authors');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/messages.ro.yml'), 'ro', 'messages');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/help.zh.yml'), 'zh', 'help');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/topics.en_GB.yml'), 'en_GB', 'topics');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/plugins.ps.yml'), 'ps', 'plugins');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/api.hy_AM.yml'), 'hy_AM', 'api');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_files.de_AT.yml'), 'de_AT', 'article_files');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_images.sr.yml'), 'sr', 'article_images');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/feedback.pl.yml'), 'pl', 'feedback');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/users.el.yml'), 'el', 'users');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_topics.es.yml'), 'es', 'article_topics');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/library.it.yml'), 'it', 'library');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/new_comments.hy.yml'), 'hy', 'new_comments');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/help.cs.yml'), 'cs', 'help');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/logs.sr.yml'), 'sr', 'logs');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/pub.en.yml'), 'en', 'pub');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/user_subscription_sections.ru.yml'), 'ru', 'user_subscription_sections');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/authors.de.yml'), 'de', 'authors');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_comments.ku.yml'), 'ku', 'article_comments');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/system_pref.sq.yml'), 'sq', 'system_pref');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/help.az.yml'), 'az', 'help');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/home.fr.yml'), 'fr', 'home');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/feedback.zh_TW.yml'), 'zh_TW', 'feedback');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/comments.pt.yml'), 'pt', 'comments');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/user_subscriptions.nb_NO.yml'), 'nb_NO', 'user_subscriptions');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/issues.ar.yml'), 'ar', 'issues');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/helpers.ar.yml'), 'ar', 'helpers');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/system_pref.sh.yml'), 'sh', 'system_pref');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/themes.sh.yml'), 'sh', 'themes');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/validators.de_AT.yml'), 'de_AT', 'validators');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/country.hy_AM.yml'), 'hy_AM', 'country');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/help.sq.yml'), 'sq', 'help');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/logs.zh.yml'), 'zh', 'logs');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/support.fa.yml'), 'fa', 'support');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/preview.zh_TW.yml'), 'zh_TW', 'preview');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_topics.fa_AF.yml'), 'fa_AF', 'article_topics');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/help.pa.yml'), 'pa', 'help');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/themes.pl.yml'), 'pl', 'themes');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/feedback.de_AT.yml'), 'de_AT', 'feedback');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/authors.ar.yml'), 'ar', 'authors');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/comments.en_GB.yml'), 'en_GB', 'comments');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/feedback.en.yml'), 'en', 'feedback');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/media_archive.ru.yml'), 'ru', 'media_archive');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/help.bn.yml'), 'bn', 'help');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/help.pt.yml'), 'pt', 'help');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/users.fa_AF.yml'), 'fa_AF', 'users');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/user_types.he.yml'), 'he', 'user_types');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/api.ka.yml'), 'ka', 'api');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/library.de.yml'), 'de', 'library');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/system_pref.zh.yml'), 'zh', 'system_pref');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/user_subscriptions.ka.yml'), 'ka', 'user_subscriptions');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/pub.zh_TW.yml'), 'zh_TW', 'pub');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/users.de.yml'), 'de', 'users');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/user_subscription_sections.de.yml'), 'de', 'user_subscription_sections');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/messages.sv.yml'), 'sv', 'messages');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_images.hy.yml'), 'hy', 'article_images');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/support.be.yml'), 'be', 'support');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/messages.hy.yml'), 'hy', 'messages');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_types.sv.yml'), 'sv', 'article_types');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_types.pt.yml'), 'pt', 'article_types');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_comments.fr.yml'), 'fr', 'article_comments');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/new_comments.en.yml'), 'en', 'new_comments');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/authors.uk.yml'), 'uk', 'authors');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/languages.nb_NO.yml'), 'nb_NO', 'languages');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_topics.hy.yml'), 'hy', 'article_topics');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/pub.ko.yml'), 'ko', 'pub');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/geolocation.fr.yml'), 'fr', 'geolocation');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/user_types.it.yml'), 'it', 'user_types');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/help.sh.yml'), 'sh', 'help');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/user_subscription_sections.nl.yml'), 'nl', 'user_subscription_sections');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_topics.sh.yml'), 'sh', 'article_topics');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/user_subscriptions.hy.yml'), 'hy', 'user_subscriptions');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/articles.es.yml'), 'es', 'articles');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/helpers.fr.yml'), 'fr', 'helpers');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/plugins_manager.pl.yml'), 'pl', 'plugins_manager');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/messages.pt_BR.yml'), 'pt_BR', 'messages');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/authors.pa.yml'), 'pa', 'authors');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/new_comments.pt_BR.yml'), 'pt_BR', 'new_comments');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/sections.hr.yml'), 'hr', 'sections');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/home.cs.yml'), 'cs', 'home');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_files.ru.yml'), 'ru', 'article_files');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/api.da.yml'), 'da', 'api');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/comments.ru.yml'), 'ru', 'comments');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/validators.pt_BR.yml'), 'pt_BR', 'validators');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/extensions.pl.yml'), 'pl', 'extensions');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/user_subscriptions.fa_AF.yml'), 'fa_AF', 'user_subscriptions');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/preview.en.yml'), 'en', 'preview');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_comments.uk.yml'), 'uk', 'article_comments');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/support.pt_BR.yml'), 'pt_BR', 'support');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/home.de.yml'), 'de', 'home');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/library.hy.yml'), 'hy', 'library');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/geolocation.nb_NO.yml'), 'nb_NO', 'geolocation');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/library.es.yml'), 'es', 'library');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/plugins.be.yml'), 'be', 'plugins');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/api.ps.yml'), 'ps', 'api');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/articles.sr.yml'), 'sr', 'articles');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/tiny_media_plugin.fa.yml'), 'fa', 'tiny_media_plugin');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/sections.hy.yml'), 'hy', 'sections');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/authors.ku.yml'), 'ku', 'authors');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/new_comments.el.yml'), 'el', 'new_comments');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_files.pl.yml'), 'pl', 'article_files');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_comments.en.yml'), 'en', 'article_comments');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/feedback.tr.yml'), 'tr', 'feedback');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/home.az.yml'), 'az', 'home');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/logs.az.yml'), 'az', 'logs');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/extensions.ar.yml'), 'ar', 'extensions');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/tiny_media_plugin.de_AT.yml'), 'de_AT', 'tiny_media_plugin');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/helpers.uk.yml'), 'uk', 'helpers');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/themes.id.yml'), 'id', 'themes');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/help.ko.yml'), 'ko', 'help');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_comments.hu.yml'), 'hu', 'article_comments');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/new_comments.az.yml'), 'az', 'new_comments');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/helpers.pt_BR.yml'), 'pt_BR', 'helpers');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/user_subscriptions.en_GB.yml'), 'en_GB', 'user_subscriptions');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/tiny_media_plugin.ku.yml'), 'ku', 'tiny_media_plugin');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/validators.el.yml'), 'el', 'validators');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/logs.fa.yml'), 'fa', 'logs');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_comments.tr.yml'), 'tr', 'article_comments');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/topics.it.yml'), 'it', 'topics');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/home.pt.yml'), 'pt', 'home');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/logs.cs.yml'), 'cs', 'logs');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/user_subscriptions.pa.yml'), 'pa', 'user_subscriptions');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/helpers.hy.yml'), 'hy', 'helpers');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/messages.zh.yml'), 'zh', 'messages');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_type_fields.pt.yml'), 'pt', 'article_type_fields');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/preview.id.yml'), 'id', 'preview');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/articles.el.yml'), 'el', 'articles');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/system_pref.es_AR.yml'), 'es_AR', 'system_pref');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/country.be.yml'), 'be', 'country');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/languages.el.yml'), 'el', 'languages');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/user_subscription_sections.hy_AM.yml'), 'hy_AM', 'user_subscription_sections');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/plugins.zh_TW.yml'), 'zh_TW', 'plugins');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/comments.uk.yml'), 'uk', 'comments');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_type_fields.hy.yml'), 'hy', 'article_type_fields');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/languages.ka.yml'), 'ka', 'languages');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/geolocation.ro.yml'), 'ro', 'geolocation');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/validators.es_AR.yml'), 'es_AR', 'validators');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/sections.tr.yml'), 'tr', 'sections');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_type_fields.ko.yml'), 'ko', 'article_type_fields');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/media_archive.bn.yml'), 'bn', 'media_archive');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/support.ro.yml'), 'ro', 'support');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/authors.hr.yml'), 'hr', 'authors');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/helpers.ko.yml'), 'ko', 'helpers');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/languages.zh.yml'), 'zh', 'languages');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_comments.nb_NO.yml'), 'nb_NO', 'article_comments');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/languages.pt_BR.yml'), 'pt_BR', 'languages');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/topics.cs.yml'), 'cs', 'topics');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/api.el.yml'), 'el', 'api');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_images.az.yml'), 'az', 'article_images');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/themes.bn.yml'), 'bn', 'themes');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/geolocation.es.yml'), 'es', 'geolocation');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/themes.hu.yml'), 'hu', 'themes');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/geolocation.he.yml'), 'he', 'geolocation');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/library.ps.yml'), 'ps', 'library');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/system_pref.de_AT.yml'), 'de_AT', 'system_pref');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/articles.pt.yml'), 'pt', 'articles');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/user_types.zh_TW.yml'), 'zh_TW', 'user_types');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/sections.it.yml'), 'it', 'sections');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/languages.sr.yml'), 'sr', 'languages');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/user_subscription_sections.it.yml'), 'it', 'user_subscription_sections');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/authors.ro.yml'), 'ro', 'authors');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/themes.pa.yml'), 'pa', 'themes');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/tiny_media_plugin.be.yml'), 'be', 'tiny_media_plugin');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/users.sr.yml'), 'sr', 'users');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/tiny_media_plugin.ar.yml'), 'ar', 'tiny_media_plugin');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_types.be.yml'), 'be', 'article_types');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/geolocation.az.yml'), 'az', 'geolocation');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/issues.de_AT.yml'), 'de_AT', 'issues');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_images.es_AR.yml'), 'es_AR', 'article_images');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/users.ku.yml'), 'ku', 'users');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/geolocation.sh.yml'), 'sh', 'geolocation');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/country.pt_BR.yml'), 'pt_BR', 'country');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/home.nb_NO.yml'), 'nb_NO', 'home');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/languages.hy_AM.yml'), 'hy_AM', 'languages');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/bug_reporting.en_GB.yml'), 'en_GB', 'bug_reporting');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/geolocation.sv.yml'), 'sv', 'geolocation');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_files.hr.yml'), 'hr', 'article_files');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_type_fields.sv.yml'), 'sv', 'article_type_fields');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/comments.ro.yml'), 'ro', 'comments');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/sections.en_GB.yml'), 'en_GB', 'sections');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/support.ar.yml'), 'ar', 'support');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/home.es.yml'), 'es', 'home');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/system_pref.hu.yml'), 'hu', 'system_pref');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/authors.sr.yml'), 'sr', 'authors');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/preview.pt_BR.yml'), 'pt_BR', 'preview');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/plugins.hy.yml'), 'hy', 'plugins');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/authors.fa.yml'), 'fa', 'authors');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_files.fa_AF.yml'), 'fa_AF', 'article_files');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/users.es_AR.yml'), 'es_AR', 'users');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/articles.nb_NO.yml'), 'nb_NO', 'articles');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/logs.hu.yml'), 'hu', 'logs');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/topics.de.yml'), 'de', 'topics');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/messages.ka.yml'), 'ka', 'messages');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/tiny_media_plugin.es_AR.yml'), 'es_AR', 'tiny_media_plugin');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/issues.es.yml'), 'es', 'issues');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/articles.zh.yml'), 'zh', 'articles');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/help.tr.yml'), 'tr', 'help');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/support.fa_AF.yml'), 'fa_AF', 'support');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/validators.pl.yml'), 'pl', 'validators');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/media_archive.es.yml'), 'es', 'media_archive');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/extensions.hr.yml'), 'hr', 'extensions');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_images.el.yml'), 'el', 'article_images');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/library.zh.yml'), 'zh', 'library');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/validators.ka.yml'), 'ka', 'validators');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_comments.ka.yml'), 'ka', 'article_comments');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/authors.fa_AF.yml'), 'fa_AF', 'authors');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/help.en.yml'), 'en', 'help');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/api.az.yml'), 'az', 'api');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/user_subscription_sections.id.yml'), 'id', 'user_subscription_sections');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/user_subscription_sections.ps.yml'), 'ps', 'user_subscription_sections');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/system_pref.tr.yml'), 'tr', 'system_pref');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/user_subscriptions.ru.yml'), 'ru', 'user_subscriptions');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/articles.pt_BR.yml'), 'pt_BR', 'articles');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/authors.fr.yml'), 'fr', 'authors');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/media_archive.id.yml'), 'id', 'media_archive');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/user_types.ru.yml'), 'ru', 'user_types');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/comments.it.yml'), 'it', 'comments');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/comments.nl.yml'), 'nl', 'comments');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/api.nl.yml'), 'nl', 'api');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_types.de.yml'), 'de', 'article_types');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/helpers.ru.yml'), 'ru', 'helpers');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/preview.hr.yml'), 'hr', 'preview');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/preview.tr.yml'), 'tr', 'preview');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_topics.hy_AM.yml'), 'hy_AM', 'article_topics');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/home.it.yml'), 'it', 'home');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/home.ro.yml'), 'ro', 'home');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/pub.da.yml'), 'da', 'pub');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_types.fa.yml'), 'fa', 'article_types');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/topics.hy.yml'), 'hy', 'topics');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_type_fields.es.yml'), 'es', 'article_type_fields');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_images.nb_NO.yml'), 'nb_NO', 'article_images');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/articles.zh_TW.yml'), 'zh_TW', 'articles');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/messages.de.yml'), 'de', 'messages');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/comments.he.yml'), 'he', 'comments');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_images.pt.yml'), 'pt', 'article_images');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/feedback.ku.yml'), 'ku', 'feedback');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_comments.el.yml'), 'el', 'article_comments');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/help.zh_TW.yml'), 'zh_TW', 'help');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/system_pref.pl.yml'), 'pl', 'system_pref');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_type_fields.de.yml'), 'de', 'article_type_fields');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/home.ka.yml'), 'ka', 'home');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/bug_reporting.de.yml'), 'de', 'bug_reporting');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/system_pref.nl.yml'), 'nl', 'system_pref');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/users.it.yml'), 'it', 'users');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/messages.en.yml'), 'en', 'messages');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/helpers.tr.yml'), 'tr', 'helpers');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/sections.zh_TW.yml'), 'zh_TW', 'sections');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/user_types.ro.yml'), 'ro', 'user_types');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_type_fields.da.yml'), 'da', 'article_type_fields');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/themes.ar.yml'), 'ar', 'themes');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/home.en.yml'), 'en', 'home');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_files.sv.yml'), 'sv', 'article_files');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/plugins_manager.sq.yml'), 'sq', 'plugins_manager');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/issues.zh_TW.yml'), 'zh_TW', 'issues');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/extensions.pa.yml'), 'pa', 'extensions');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/comments.es_AR.yml'), 'es_AR', 'comments');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/logs.en_GB.yml'), 'en_GB', 'logs');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/feedback.es.yml'), 'es', 'feedback');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_types.uk.yml'), 'uk', 'article_types');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/help.ku.yml'), 'ku', 'help');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/comments.cs.yml'), 'cs', 'comments');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/messages.id.yml'), 'id', 'messages');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/themes.nl.yml'), 'nl', 'themes');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/helpers.ro.yml'), 'ro', 'helpers');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/preview.hy_AM.yml'), 'hy_AM', 'preview');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/languages.he.yml'), 'he', 'languages');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/api.de.yml'), 'de', 'api');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/user_subscriptions.be.yml'), 'be', 'user_subscriptions');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/country.de_AT.yml'), 'de_AT', 'country');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/preview.sv.yml'), 'sv', 'preview');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/support.en.yml'), 'en', 'support');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/user_subscriptions.el.yml'), 'el', 'user_subscriptions');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/api.ar.yml'), 'ar', 'api');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/library.pl.yml'), 'pl', 'library');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/preview.de_AT.yml'), 'de_AT', 'preview');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/logs.de.yml'), 'de', 'logs');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/feedback.ps.yml'), 'ps', 'feedback');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/new_comments.zh.yml'), 'zh', 'new_comments');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/themes.it.yml'), 'it', 'themes');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/comments.hr.yml'), 'hr', 'comments');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/sections.hy_AM.yml'), 'hy_AM', 'sections');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/preview.pt.yml'), 'pt', 'preview');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/plugins.de.yml'), 'de', 'plugins');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/pub.pt.yml'), 'pt', 'pub');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/media_archive.az.yml'), 'az', 'media_archive');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/sections.sh.yml'), 'sh', 'sections');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/logs.nl.yml'), 'nl', 'logs');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/help.hr.yml'), 'hr', 'help');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_types.nl.yml'), 'nl', 'article_types');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/preview.pa.yml'), 'pa', 'preview');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/users.bn.yml'), 'bn', 'users');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_types.en_GB.yml'), 'en_GB', 'article_types');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/plugins_manager.de_AT.yml'), 'de_AT', 'plugins_manager');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/system_pref.en.yml'), 'en', 'system_pref');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/api.fr.yml'), 'fr', 'api');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/validators.sh.yml'), 'sh', 'validators');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/bug_reporting.ar.yml'), 'ar', 'bug_reporting');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/new_comments.de_AT.yml'), 'de_AT', 'new_comments');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/logs.pt.yml'), 'pt', 'logs');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/extensions.nl.yml'), 'nl', 'extensions');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/helpers.es_AR.yml'), 'es_AR', 'helpers');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/languages.cs.yml'), 'cs', 'languages');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/users.az.yml'), 'az', 'users');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/library.fa.yml'), 'fa', 'library');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/comments.pa.yml'), 'pa', 'comments');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/api.ko.yml'), 'ko', 'api');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/bug_reporting.tr.yml'), 'tr', 'bug_reporting');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/user_subscription_sections.az.yml'), 'az', 'user_subscription_sections');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/pub.hu.yml'), 'hu', 'pub');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/topics.fa_AF.yml'), 'fa_AF', 'topics');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/feedback.nb_NO.yml'), 'nb_NO', 'feedback');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/validators.az.yml'), 'az', 'validators');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/validators.bn.yml'), 'bn', 'validators');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/api.zh_TW.yml'), 'zh_TW', 'api');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/plugins.fr.yml'), 'fr', 'plugins');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_files.sq.yml'), 'sq', 'article_files');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_comments.hy.yml'), 'hy', 'article_comments');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/home.ru.yml'), 'ru', 'home');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/geolocation.hu.yml'), 'hu', 'geolocation');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/languages.sh.yml'), 'sh', 'languages');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/issues.bn.yml'), 'bn', 'issues');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/themes.cs.yml'), 'cs', 'themes');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/plugins_manager.de.yml'), 'de', 'plugins_manager');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/users.sq.yml'), 'sq', 'users');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/feedback.hy_AM.yml'), 'hy_AM', 'feedback');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/user_subscriptions.es.yml'), 'es', 'user_subscriptions');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/new_comments.ar.yml'), 'ar', 'new_comments');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/pub.hy_AM.yml'), 'hy_AM', 'pub');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/plugins_manager.bn.yml'), 'bn', 'plugins_manager');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/articles.de_AT.yml'), 'de_AT', 'articles');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/geolocation.pt_BR.yml'), 'pt_BR', 'geolocation');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/system_pref.el.yml'), 'el', 'system_pref');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/logs.ru.yml'), 'ru', 'logs');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/bug_reporting.pt_BR.yml'), 'pt_BR', 'bug_reporting');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/plugins.nl.yml'), 'nl', 'plugins');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/support.hu.yml'), 'hu', 'support');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_comments.nl.yml'), 'nl', 'article_comments');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/topics.el.yml'), 'el', 'topics');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/library.uk.yml'), 'uk', 'library');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/issues.fa.yml'), 'fa', 'issues');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/extensions.ru.yml'), 'ru', 'extensions');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/preview.nb_NO.yml'), 'nb_NO', 'preview');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_type_fields.pl.yml'), 'pl', 'article_type_fields');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/system_pref.pt.yml'), 'pt', 'system_pref');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/articles.id.yml'), 'id', 'articles');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/authors.hy.yml'), 'hy', 'authors');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/languages.ku.yml'), 'ku', 'languages');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/extensions.de.yml'), 'de', 'extensions');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/api.zh.yml'), 'zh', 'api');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/extensions.fr.yml'), 'fr', 'extensions');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/comments.de.yml'), 'de', 'comments');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/home.tr.yml'), 'tr', 'home');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_files.zh.yml'), 'zh', 'article_files');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/sections.ka.yml'), 'ka', 'sections');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/tiny_media_plugin.sr.yml'), 'sr', 'tiny_media_plugin');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/topics.ar.yml'), 'ar', 'topics');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/api.sq.yml'), 'sq', 'api');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/pub.es_AR.yml'), 'es_AR', 'pub');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/country.ps.yml'), 'ps', 'country');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/geolocation.sq.yml'), 'sq', 'geolocation');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/library.nb_NO.yml'), 'nb_NO', 'library');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/user_subscription_sections.ar.yml'), 'ar', 'user_subscription_sections');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/tiny_media_plugin.pt_BR.yml'), 'pt_BR', 'tiny_media_plugin');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/plugins_manager.cs.yml'), 'cs', 'plugins_manager');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/articles.bn.yml'), 'bn', 'articles');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/geolocation.fa.yml'), 'fa', 'geolocation');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_type_fields.pa.yml'), 'pa', 'article_type_fields');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/validators.fr.yml'), 'fr', 'validators');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/comments.pt_BR.yml'), 'pt_BR', 'comments');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_comments.az.yml'), 'az', 'article_comments');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/messages.ru.yml'), 'ru', 'messages');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/pub.ps.yml'), 'ps', 'pub');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/geolocation.pt.yml'), 'pt', 'geolocation');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/user_subscription_sections.es.yml'), 'es', 'user_subscription_sections');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_topics.ka.yml'), 'ka', 'article_topics');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/geolocation.ku.yml'), 'ku', 'geolocation');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/media_archive.hy_AM.yml'), 'hy_AM', 'media_archive');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/api.pl.yml'), 'pl', 'api');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/user_subscriptions.ko.yml'), 'ko', 'user_subscriptions');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/themes.en_GB.yml'), 'en_GB', 'themes');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/user_subscription_sections.sq.yml'), 'sq', 'user_subscription_sections');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/authors.es_AR.yml'), 'es_AR', 'authors');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/messages.fa_AF.yml'), 'fa_AF', 'messages');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/library.en_GB.yml'), 'en_GB', 'library');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/help.ar.yml'), 'ar', 'help');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_comments.cs.yml'), 'cs', 'article_comments');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_topics.sv.yml'), 'sv', 'article_topics');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_comments.es_AR.yml'), 'es_AR', 'article_comments');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/user_subscriptions.sh.yml'), 'sh', 'user_subscriptions');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/messages.ku.yml'), 'ku', 'messages');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/helpers.id.yml'), 'id', 'helpers');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_topics.ps.yml'), 'ps', 'article_topics');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/extensions.sr.yml'), 'sr', 'extensions');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/api.sr.yml'), 'sr', 'api');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/plugins_manager.pt_BR.yml'), 'pt_BR', 'plugins_manager');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/support.he.yml'), 'he', 'support');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_files.en.yml'), 'en', 'article_files');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/geolocation.uk.yml'), 'uk', 'geolocation');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_type_fields.ka.yml'), 'ka', 'article_type_fields');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/languages.id.yml'), 'id', 'languages');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/authors.bn.yml'), 'bn', 'authors');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/bug_reporting.bn.yml'), 'bn', 'bug_reporting');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/tiny_media_plugin.zh.yml'), 'zh', 'tiny_media_plugin');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_type_fields.sr.yml'), 'sr', 'article_type_fields');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/logs.ko.yml'), 'ko', 'logs');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/helpers.zh_TW.yml'), 'zh_TW', 'helpers');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/comments.en.yml'), 'en', 'comments');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/extensions.ro.yml'), 'ro', 'extensions');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/user_subscriptions.bn.yml'), 'bn', 'user_subscriptions');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/media_archive.fa.yml'), 'fa', 'media_archive');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/sections.nb_NO.yml'), 'nb_NO', 'sections');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_images.de_AT.yml'), 'de_AT', 'article_images');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/pub.he.yml'), 'he', 'pub');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/plugins_manager.ka.yml'), 'ka', 'plugins_manager');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/logs.id.yml'), 'id', 'logs');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_topics.da.yml'), 'da', 'article_topics');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/articles.ka.yml'), 'ka', 'articles');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/media_archive.nl.yml'), 'nl', 'media_archive');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/support.bn.yml'), 'bn', 'support');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/system_pref.ru.yml'), 'ru', 'system_pref');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/messages.el.yml'), 'el', 'messages');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/media_archive.nb_NO.yml'), 'nb_NO', 'media_archive');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/languages.sq.yml'), 'sq', 'languages');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/library.sh.yml'), 'sh', 'library');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/plugins_manager.ps.yml'), 'ps', 'plugins_manager');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/bug_reporting.ku.yml'), 'ku', 'bug_reporting');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/tiny_media_plugin.bn.yml'), 'bn', 'tiny_media_plugin');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/comments.nb_NO.yml'), 'nb_NO', 'comments');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/geolocation.el.yml'), 'el', 'geolocation');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/geolocation.it.yml'), 'it', 'geolocation');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/new_comments.de.yml'), 'de', 'new_comments');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/user_subscriptions.hr.yml'), 'hr', 'user_subscriptions');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/new_comments.he.yml'), 'he', 'new_comments');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/helpers.pl.yml'), 'pl', 'helpers');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/plugins_manager.hy.yml'), 'hy', 'plugins_manager');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/bug_reporting.uk.yml'), 'uk', 'bug_reporting');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/themes.az.yml'), 'az', 'themes');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/articles.he.yml'), 'he', 'articles');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/new_comments.nl.yml'), 'nl', 'new_comments');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/bug_reporting.es.yml'), 'es', 'bug_reporting');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/pub.es.yml'), 'es', 'pub');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/system_pref.pa.yml'), 'pa', 'system_pref');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/home.be.yml'), 'be', 'home');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_images.pt_BR.yml'), 'pt_BR', 'article_images');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/tiny_media_plugin.ka.yml'), 'ka', 'tiny_media_plugin');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/support.sv.yml'), 'sv', 'support');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/users.hy.yml'), 'hy', 'users');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/media_archive.ku.yml'), 'ku', 'media_archive');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_topics.zh.yml'), 'zh', 'article_topics');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/bug_reporting.en.yml'), 'en', 'bug_reporting');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/plugins_manager.tr.yml'), 'tr', 'plugins_manager');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/validators.cs.yml'), 'cs', 'validators');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/api.be.yml'), 'be', 'api');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/extensions.be.yml'), 'be', 'extensions');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/languages.fr.yml'), 'fr', 'languages');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/user_types.en_GB.yml'), 'en_GB', 'user_types');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/geolocation.ps.yml'), 'ps', 'geolocation');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/support.da.yml'), 'da', 'support');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/messages.sr.yml'), 'sr', 'messages');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/help.de_AT.yml'), 'de_AT', 'help');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/extensions.pt_BR.yml'), 'pt_BR', 'extensions');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/topics.he.yml'), 'he', 'topics');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/users.ko.yml'), 'ko', 'users');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/media_archive.uk.yml'), 'uk', 'media_archive');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/user_subscriptions.hu.yml'), 'hu', 'user_subscriptions');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/messages.az.yml'), 'az', 'messages');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/users.fa.yml'), 'fa', 'users');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/plugins_manager.es.yml'), 'es', 'plugins_manager');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/media_archive.hu.yml'), 'hu', 'media_archive');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/bug_reporting.nl.yml'), 'nl', 'bug_reporting');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/tiny_media_plugin.uk.yml'), 'uk', 'tiny_media_plugin');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/sections.el.yml'), 'el', 'sections');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/themes.zh_TW.yml'), 'zh_TW', 'themes');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/bug_reporting.ru.yml'), 'ru', 'bug_reporting');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/extensions.hy_AM.yml'), 'hy_AM', 'extensions');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_types.cs.yml'), 'cs', 'article_types');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/validators.sr.yml'), 'sr', 'validators');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/new_comments.bn.yml'), 'bn', 'new_comments');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/user_subscriptions.sr.yml'), 'sr', 'user_subscriptions');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/sections.id.yml'), 'id', 'sections');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/system_pref.hy.yml'), 'hy', 'system_pref');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/messages.pl.yml'), 'pl', 'messages');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/authors.el.yml'), 'el', 'authors');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_type_fields.el.yml'), 'el', 'article_type_fields');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/helpers.it.yml'), 'it', 'helpers');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/extensions.en.yml'), 'en', 'extensions');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_types.ku.yml'), 'ku', 'article_types');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/bug_reporting.sv.yml'), 'sv', 'bug_reporting');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/help.fa_AF.yml'), 'fa_AF', 'help');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/bug_reporting.it.yml'), 'it', 'bug_reporting');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_types.nb_NO.yml'), 'nb_NO', 'article_types');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/issues.pt.yml'), 'pt', 'issues');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/country.ku.yml'), 'ku', 'country');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/logs.ps.yml'), 'ps', 'logs');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/logs.uk.yml'), 'uk', 'logs');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/home.sh.yml'), 'sh', 'home');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/preview.uk.yml'), 'uk', 'preview');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/issues.da.yml'), 'da', 'issues');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/home.hu.yml'), 'hu', 'home');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/home.uk.yml'), 'uk', 'home');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/issues.hy_AM.yml'), 'hy_AM', 'issues');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/bug_reporting.sh.yml'), 'sh', 'bug_reporting');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/feedback.ru.yml'), 'ru', 'feedback');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_topics.zh_TW.yml'), 'zh_TW', 'article_topics');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/bug_reporting.hy.yml'), 'hy', 'bug_reporting');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_topics.ro.yml'), 'ro', 'article_topics');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/country.pa.yml'), 'pa', 'country');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/plugins.ko.yml'), 'ko', 'plugins');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/messages.hy_AM.yml'), 'hy_AM', 'messages');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/user_subscription_sections.uk.yml'), 'uk', 'user_subscription_sections');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/tiny_media_plugin.he.yml'), 'he', 'tiny_media_plugin');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/new_comments.en_GB.yml'), 'en_GB', 'new_comments');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/topics.sr.yml'), 'sr', 'topics');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/logs.zh_TW.yml'), 'zh_TW', 'logs');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_files.el.yml'), 'el', 'article_files');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/topics.fa.yml'), 'fa', 'topics');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/validators.pa.yml'), 'pa', 'validators');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_types.ar.yml'), 'ar', 'article_types');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_comments.pt_BR.yml'), 'pt_BR', 'article_comments');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/media_archive.zh_TW.yml'), 'zh_TW', 'media_archive');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_type_fields.ps.yml'), 'ps', 'article_type_fields');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/user_subscription_sections.en_GB.yml'), 'en_GB', 'user_subscription_sections');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/authors.ko.yml'), 'ko', 'authors');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/library.pt.yml'), 'pt', 'library');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/languages.az.yml'), 'az', 'languages');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/comments.az.yml'), 'az', 'comments');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/articles.uk.yml'), 'uk', 'articles');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/api.ro.yml'), 'ro', 'api');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/bug_reporting.ka.yml'), 'ka', 'bug_reporting');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/tiny_media_plugin.pa.yml'), 'pa', 'tiny_media_plugin');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/users.uk.yml'), 'uk', 'users');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/sections.az.yml'), 'az', 'sections');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_images.fr.yml'), 'fr', 'article_images');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/plugins_manager.da.yml'), 'da', 'plugins_manager');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/home.sr.yml'), 'sr', 'home');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/preview.be.yml'), 'be', 'preview');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/bug_reporting.az.yml'), 'az', 'bug_reporting');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_topics.pt.yml'), 'pt', 'article_topics');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/comments.sh.yml'), 'sh', 'comments');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/articles.fa_AF.yml'), 'fa_AF', 'articles');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/pub.tr.yml'), 'tr', 'pub');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/helpers.en_GB.yml'), 'en_GB', 'helpers');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/country.es_AR.yml'), 'es_AR', 'country');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_type_fields.id.yml'), 'id', 'article_type_fields');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/country.en_GB.yml'), 'en_GB', 'country');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/media_archive.sq.yml'), 'sq', 'media_archive');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/library.ko.yml'), 'ko', 'library');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/languages.sv.yml'), 'sv', 'languages');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/new_comments.sv.yml'), 'sv', 'new_comments');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_files.fa.yml'), 'fa', 'article_files');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/validators.sv.yml'), 'sv', 'validators');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/help.ps.yml'), 'ps', 'help');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/country.hu.yml'), 'hu', 'country');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/user_types.hu.yml'), 'hu', 'user_types');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/authors.en.yml'), 'en', 'authors');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/user_types.pl.yml'), 'pl', 'user_types');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/articles.ko.yml'), 'ko', 'articles');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/sections.be.yml'), 'be', 'sections');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/media_archive.sr.yml'), 'sr', 'media_archive');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/issues.ps.yml'), 'ps', 'issues');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/user_types.ps.yml'), 'ps', 'user_types');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/languages.pl.yml'), 'pl', 'languages');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/support.de.yml'), 'de', 'support');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/api.de_AT.yml'), 'de_AT', 'api');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/api.bn.yml'), 'bn', 'api');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_comments.hy_AM.yml'), 'hy_AM', 'article_comments');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/topics.pl.yml'), 'pl', 'topics');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/messages.ar.yml'), 'ar', 'messages');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_images.it.yml'), 'it', 'article_images');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/user_types.uk.yml'), 'uk', 'user_types');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/pub.sv.yml'), 'sv', 'pub');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/validators.be.yml'), 'be', 'validators');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_files.hy_AM.yml'), 'hy_AM', 'article_files');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/support.pa.yml'), 'pa', 'support');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/validators.hy.yml'), 'hy', 'validators');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/plugins.ro.yml'), 'ro', 'plugins');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_files.fr.yml'), 'fr', 'article_files');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_types.en.yml'), 'en', 'article_types');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_topics.pa.yml'), 'pa', 'article_topics');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/api.pt_BR.yml'), 'pt_BR', 'api');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/support.de_AT.yml'), 'de_AT', 'support');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/validators.ru.yml'), 'ru', 'validators');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/bug_reporting.sq.yml'), 'sq', 'bug_reporting');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/bug_reporting.de_AT.yml'), 'de_AT', 'bug_reporting');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/geolocation.en.yml'), 'en', 'geolocation');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_topics.nb_NO.yml'), 'nb_NO', 'article_topics');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/messages.nl.yml'), 'nl', 'messages');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/themes.sv.yml'), 'sv', 'themes');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/tiny_media_plugin.sh.yml'), 'sh', 'tiny_media_plugin');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/user_types.nl.yml'), 'nl', 'user_types');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/authors.sq.yml'), 'sq', 'authors');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/support.tr.yml'), 'tr', 'support');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_comments.sv.yml'), 'sv', 'article_comments');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/validators.en.yml'), 'en', 'validators');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/validators.ko.yml'), 'ko', 'validators');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/users.he.yml'), 'he', 'users');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/new_comments.da.yml'), 'da', 'new_comments');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/plugins.es_AR.yml'), 'es_AR', 'plugins');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/messages.es.yml'), 'es', 'messages');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/plugins_manager.nb_NO.yml'), 'nb_NO', 'plugins_manager');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_files.zh_TW.yml'), 'zh_TW', 'article_files');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/authors.ru.yml'), 'ru', 'authors');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/extensions.hy.yml'), 'hy', 'extensions');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_files.ka.yml'), 'ka', 'article_files');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/user_subscriptions.cs.yml'), 'cs', 'user_subscriptions');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/validators.sq.yml'), 'sq', 'validators');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_files.pa.yml'), 'pa', 'article_files');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/home.he.yml'), 'he', 'home');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/help.hy_AM.yml'), 'hy_AM', 'help');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/home.sv.yml'), 'sv', 'home');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/user_subscriptions.pt.yml'), 'pt', 'user_subscriptions');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/topics.fr.yml'), 'fr', 'topics');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/themes.hy_AM.yml'), 'hy_AM', 'themes');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_files.cs.yml'), 'cs', 'article_files');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/preview.he.yml'), 'he', 'preview');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/users.es.yml'), 'es', 'users');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/media_archive.be.yml'), 'be', 'media_archive');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_topics.fa.yml'), 'fa', 'article_topics');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/geolocation.zh_TW.yml'), 'zh_TW', 'geolocation');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/api.en.yml'), 'en', 'api');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/support.zh_TW.yml'), 'zh_TW', 'support');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/bug_reporting.ps.yml'), 'ps', 'bug_reporting');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/support.pl.yml'), 'pl', 'support');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/users.zh_TW.yml'), 'zh_TW', 'users');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/users.cs.yml'), 'cs', 'users');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/themes.uk.yml'), 'uk', 'themes');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/media_archive.ko.yml'), 'ko', 'media_archive');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/users.en.yml'), 'en', 'users');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/authors.pt_BR.yml'), 'pt_BR', 'authors');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/country.da.yml'), 'da', 'country');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/preview.ko.yml'), 'ko', 'preview');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_files.it.yml'), 'it', 'article_files');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/themes.he.yml'), 'he', 'themes');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/library.ar.yml'), 'ar', 'library');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/feedback.pa.yml'), 'pa', 'feedback');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/sections.pt_BR.yml'), 'pt_BR', 'sections');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/user_subscription_sections.fa.yml'), 'fa', 'user_subscription_sections');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/topics.ps.yml'), 'ps', 'topics');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/country.sr.yml'), 'sr', 'country');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/api.hy.yml'), 'hy', 'api');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/user_types.sr.yml'), 'sr', 'user_types');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_files.ko.yml'), 'ko', 'article_files');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/extensions.pt.yml'), 'pt', 'extensions');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/logs.es.yml'), 'es', 'logs');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/geolocation.ko.yml'), 'ko', 'geolocation');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/plugins.uk.yml'), 'uk', 'plugins');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/user_types.az.yml'), 'az', 'user_types');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/bug_reporting.el.yml'), 'el', 'bug_reporting');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/issues.hr.yml'), 'hr', 'issues');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/geolocation.cs.yml'), 'cs', 'geolocation');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/pub.ka.yml'), 'ka', 'pub');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/articles.be.yml'), 'be', 'articles');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_comments.zh.yml'), 'zh', 'article_comments');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/new_comments.ku.yml'), 'ku', 'new_comments');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/user_subscriptions.ku.yml'), 'ku', 'user_subscriptions');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/pub.en_GB.yml'), 'en_GB', 'pub');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_files.ku.yml'), 'ku', 'article_files');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/comments.hy.yml'), 'hy', 'comments');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/articles.ku.yml'), 'ku', 'articles');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/sections.ar.yml'), 'ar', 'sections');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/articles.pl.yml'), 'pl', 'articles');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/users.pl.yml'), 'pl', 'users');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/user_subscription_sections.zh.yml'), 'zh', 'user_subscription_sections');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/new_comments.fa_AF.yml'), 'fa_AF', 'new_comments');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/geolocation.zh.yml'), 'zh', 'geolocation');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/themes.de.yml'), 'de', 'themes');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/sections.zh.yml'), 'zh', 'sections');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/users.sv.yml'), 'sv', 'users');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/api.nb_NO.yml'), 'nb_NO', 'api');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/themes.fr.yml'), 'fr', 'themes');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/home.fa.yml'), 'fa', 'home');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/topics.bn.yml'), 'bn', 'topics');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/library.hu.yml'), 'hu', 'library');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/preview.nl.yml'), 'nl', 'preview');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/user_types.de_AT.yml'), 'de_AT', 'user_types');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/users.en_GB.yml'), 'en_GB', 'users');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_topics.ru.yml'), 'ru', 'article_topics');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_images.tr.yml'), 'tr', 'article_images');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/user_subscriptions.id.yml'), 'id', 'user_subscriptions');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/validators.fa.yml'), 'fa', 'validators');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/library.tr.yml'), 'tr', 'library');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/home.hy.yml'), 'hy', 'home');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/feedback.es_AR.yml'), 'es_AR', 'feedback');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/sections.ps.yml'), 'ps', 'sections');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/media_archive.sv.yml'), 'sv', 'media_archive');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/bug_reporting.es_AR.yml'), 'es_AR', 'bug_reporting');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/home.hr.yml'), 'hr', 'home');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/users.nl.yml'), 'nl', 'users');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_images.ar.yml'), 'ar', 'article_images');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/country.zh_TW.yml'), 'zh_TW', 'country');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/helpers.en.yml'), 'en', 'helpers');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_comments.en_GB.yml'), 'en_GB', 'article_comments');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/media_archive.zh.yml'), 'zh', 'media_archive');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/themes.fa.yml'), 'fa', 'themes');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/library.nl.yml'), 'nl', 'library');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/user_subscriptions.pt_BR.yml'), 'pt_BR', 'user_subscriptions');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_topics.hr.yml'), 'hr', 'article_topics');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/user_subscriptions.sv.yml'), 'sv', 'user_subscriptions');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/user_types.bn.yml'), 'bn', 'user_types');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/issues.pl.yml'), 'pl', 'issues');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/library.fr.yml'), 'fr', 'library');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/library.ka.yml'), 'ka', 'library');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/media_archive.pa.yml'), 'pa', 'media_archive');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/feedback.hu.yml'), 'hu', 'feedback');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/helpers.ps.yml'), 'ps', 'helpers');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/bug_reporting.hr.yml'), 'hr', 'bug_reporting');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/home.id.yml'), 'id', 'home');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_comments.be.yml'), 'be', 'article_comments');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/topics.ro.yml'), 'ro', 'topics');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/feedback.uk.yml'), 'uk', 'feedback');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/user_types.be.yml'), 'be', 'user_types');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/user_subscription_sections.pt_BR.yml'), 'pt_BR', 'user_subscription_sections');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/validators.de.yml'), 'de', 'validators');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_types.he.yml'), 'he', 'article_types');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/extensions.sq.yml'), 'sq', 'extensions');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_files.be.yml'), 'be', 'article_files');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_comments.de.yml'), 'de', 'article_comments');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/home.pl.yml'), 'pl', 'home');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/api.it.yml'), 'it', 'api');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/preview.sr.yml'), 'sr', 'preview');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/support.el.yml'), 'el', 'support');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/user_types.el.yml'), 'el', 'user_types');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/users.de_AT.yml'), 'de_AT', 'users');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/home.zh_TW.yml'), 'zh_TW', 'home');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/articles.sv.yml'), 'sv', 'articles');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/extensions.es.yml'), 'es', 'extensions');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/home.zh.yml'), 'zh', 'home');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/issues.az.yml'), 'az', 'issues');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/user_subscription_sections.pt.yml'), 'pt', 'user_subscription_sections');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_files.az.yml'), 'az', 'article_files');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_types.zh.yml'), 'zh', 'article_types');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/plugins.sh.yml'), 'sh', 'plugins');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/media_archive.en.yml'), 'en', 'media_archive');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/user_subscriptions.zh_TW.yml'), 'zh_TW', 'user_subscriptions');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/extensions.bn.yml'), 'bn', 'extensions');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/sections.ru.yml'), 'ru', 'sections');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/articles.fa.yml'), 'fa', 'articles');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/plugins.sv.yml'), 'sv', 'plugins');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/user_subscription_sections.ko.yml'), 'ko', 'user_subscription_sections');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/pub.ku.yml'), 'ku', 'pub');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/logs.he.yml'), 'he', 'logs');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/new_comments.tr.yml'), 'tr', 'new_comments');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/help.sv.yml'), 'sv', 'help');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/preview.fr.yml'), 'fr', 'preview');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_topics.sq.yml'), 'sq', 'article_topics');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/help.es.yml'), 'es', 'help');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/users.ps.yml'), 'ps', 'users');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/languages.be.yml'), 'be', 'languages');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/issues.ku.yml'), 'ku', 'issues');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/library.zh_TW.yml'), 'zh_TW', 'library');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/sections.fa_AF.yml'), 'fa_AF', 'sections');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/help.de.yml'), 'de', 'help');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/user_subscriptions.en.yml'), 'en', 'user_subscriptions');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/support.uk.yml'), 'uk', 'support');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/plugins_manager.sv.yml'), 'sv', 'plugins_manager');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_images.bn.yml'), 'bn', 'article_images');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/extensions.de_AT.yml'), 'de_AT', 'extensions');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/country.hr.yml'), 'hr', 'country');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_comments.sq.yml'), 'sq', 'article_comments');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/system_pref.sv.yml'), 'sv', 'system_pref');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_topics.pt_BR.yml'), 'pt_BR', 'article_topics');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/user_subscription_sections.he.yml'), 'he', 'user_subscription_sections');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/logs.ka.yml'), 'ka', 'logs');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_files.uk.yml'), 'uk', 'article_files');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/bug_reporting.fa_AF.yml'), 'fa_AF', 'bug_reporting');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/media_archive.tr.yml'), 'tr', 'media_archive');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_files.hy.yml'), 'hy', 'article_files');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_comments.pa.yml'), 'pa', 'article_comments');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/users.ar.yml'), 'ar', 'users');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/system_pref.es.yml'), 'es', 'system_pref');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/country.fr.yml'), 'fr', 'country');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_types.sh.yml'), 'sh', 'article_types');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/api.he.yml'), 'he', 'api');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_types.pt_BR.yml'), 'pt_BR', 'article_types');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/users.zh.yml'), 'zh', 'users');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/articles.hy.yml'), 'hy', 'articles');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/extensions.fa_AF.yml'), 'fa_AF', 'extensions');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/media_archive.pl.yml'), 'pl', 'media_archive');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/sections.es.yml'), 'es', 'sections');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_images.nl.yml'), 'nl', 'article_images');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/feedback.az.yml'), 'az', 'feedback');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/validators.uk.yml'), 'uk', 'validators');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/geolocation.en_GB.yml'), 'en_GB', 'geolocation');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/validators.ar.yml'), 'ar', 'validators');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/feedback.pt.yml'), 'pt', 'feedback');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/languages.it.yml'), 'it', 'languages');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/validators.zh_TW.yml'), 'zh_TW', 'validators');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/help.es_AR.yml'), 'es_AR', 'help');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/media_archive.de_AT.yml'), 'de_AT', 'media_archive');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/users.sh.yml'), 'sh', 'users');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_topics.cs.yml'), 'cs', 'article_topics');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/country.sh.yml'), 'sh', 'country');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/user_types.fa.yml'), 'fa', 'user_types');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/articles.hy_AM.yml'), 'hy_AM', 'articles');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/system_pref.en_GB.yml'), 'en_GB', 'system_pref');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/user_subscription_sections.hr.yml'), 'hr', 'user_subscription_sections');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/user_types.pt_BR.yml'), 'pt_BR', 'user_types');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/preview.cs.yml'), 'cs', 'preview');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/media_archive.ps.yml'), 'ps', 'media_archive');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/users.pt.yml'), 'pt', 'users');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/system_pref.nb_NO.yml'), 'nb_NO', 'system_pref');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/user_types.sv.yml'), 'sv', 'user_types');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/country.ka.yml'), 'ka', 'country');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/plugins.cs.yml'), 'cs', 'plugins');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/system_pref.pt_BR.yml'), 'pt_BR', 'system_pref');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/sections.de.yml'), 'de', 'sections');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_types.hr.yml'), 'hr', 'article_types');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/issues.sh.yml'), 'sh', 'issues');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/messages.ps.yml'), 'ps', 'messages');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_files.pt_BR.yml'), 'pt_BR', 'article_files');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/api.cs.yml'), 'cs', 'api');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/pub.fr.yml'), 'fr', 'pub');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/comments.be.yml'), 'be', 'comments');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/extensions.sh.yml'), 'sh', 'extensions');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_type_fields.bn.yml'), 'bn', 'article_type_fields');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_images.ru.yml'), 'ru', 'article_images');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/help.hy.yml'), 'hy', 'help');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/user_types.ka.yml'), 'ka', 'user_types');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/languages.ps.yml'), 'ps', 'languages');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_topics.en.yml'), 'en', 'article_topics');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/issues.nb_NO.yml'), 'nb_NO', 'issues');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/tiny_media_plugin.ko.yml'), 'ko', 'tiny_media_plugin');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/geolocation.fa_AF.yml'), 'fa_AF', 'geolocation');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/new_comments.hr.yml'), 'hr', 'new_comments');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/feedback.bn.yml'), 'bn', 'feedback');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/themes.sq.yml'), 'sq', 'themes');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/preview.fa.yml'), 'fa', 'preview');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/system_pref.ka.yml'), 'ka', 'system_pref');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/user_subscriptions.ro.yml'), 'ro', 'user_subscriptions');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/topics.pt.yml'), 'pt', 'topics');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_comments.ps.yml'), 'ps', 'article_comments');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/api.es_AR.yml'), 'es_AR', 'api');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/geolocation.ru.yml'), 'ru', 'geolocation');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/media_archive.hy.yml'), 'hy', 'media_archive');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/new_comments.ps.yml'), 'ps', 'new_comments');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/help.ru.yml'), 'ru', 'help');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/tiny_media_plugin.az.yml'), 'az', 'tiny_media_plugin');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/topics.nl.yml'), 'nl', 'topics');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/validators.zh.yml'), 'zh', 'validators');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/pub.it.yml'), 'it', 'pub');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/languages.da.yml'), 'da', 'languages');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/feedback.cs.yml'), 'cs', 'feedback');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/user_subscriptions.da.yml'), 'da', 'user_subscriptions');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/plugins_manager.uk.yml'), 'uk', 'plugins_manager');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/comments.hu.yml'), 'hu', 'comments');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/plugins_manager.ar.yml'), 'ar', 'plugins_manager');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/bug_reporting.ro.yml'), 'ro', 'bug_reporting');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/topics.pa.yml'), 'pa', 'topics');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/sections.he.yml'), 'he', 'sections');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/media_archive.sh.yml'), 'sh', 'media_archive');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/authors.it.yml'), 'it', 'authors');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/user_subscription_sections.hy.yml'), 'hy', 'user_subscription_sections');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/api.ku.yml'), 'ku', 'api');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/home.el.yml'), 'el', 'home');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/issues.nl.yml'), 'nl', 'issues');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/plugins_manager.zh.yml'), 'zh', 'plugins_manager');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/user_types.fr.yml'), 'fr', 'user_types');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/logs.da.yml'), 'da', 'logs');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/logs.ku.yml'), 'ku', 'logs');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/articles.es_AR.yml'), 'es_AR', 'articles');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/tiny_media_plugin.fa_AF.yml'), 'fa_AF', 'tiny_media_plugin');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/helpers.nb_NO.yml'), 'nb_NO', 'helpers');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/country.bn.yml'), 'bn', 'country');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/logs.it.yml'), 'it', 'logs');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_images.en.yml'), 'en', 'article_images');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/topics.es.yml'), 'es', 'topics');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/plugins.hr.yml'), 'hr', 'plugins');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/users.pt_BR.yml'), 'pt_BR', 'users');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/comments.de_AT.yml'), 'de_AT', 'comments');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/articles.hu.yml'), 'hu', 'articles');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_files.pt.yml'), 'pt', 'article_files');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/issues.pa.yml'), 'pa', 'issues');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/system_pref.it.yml'), 'it', 'system_pref');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/tiny_media_plugin.hu.yml'), 'hu', 'tiny_media_plugin');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/users.nb_NO.yml'), 'nb_NO', 'users');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/tiny_media_plugin.de.yml'), 'de', 'tiny_media_plugin');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/logs.tr.yml'), 'tr', 'logs');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/helpers.da.yml'), 'da', 'helpers');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/tiny_media_plugin.it.yml'), 'it', 'tiny_media_plugin');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/pub.zh.yml'), 'zh', 'pub');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/user_types.pa.yml'), 'pa', 'user_types');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/geolocation.id.yml'), 'id', 'geolocation');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/support.pt.yml'), 'pt', 'support');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/user_subscription_sections.ku.yml'), 'ku', 'user_subscription_sections');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/comments.el.yml'), 'el', 'comments');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/pub.de.yml'), 'de', 'pub');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/user_subscription_sections.tr.yml'), 'tr', 'user_subscription_sections');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/feedback.id.yml'), 'id', 'feedback');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/support.cs.yml'), 'cs', 'support');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/api.sh.yml'), 'sh', 'api');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_images.cs.yml'), 'cs', 'article_images');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/country.fa.yml'), 'fa', 'country');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/topics.ku.yml'), 'ku', 'topics');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/user_subscriptions.uk.yml'), 'uk', 'user_subscriptions');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/themes.nb_NO.yml'), 'nb_NO', 'themes');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/validators.ro.yml'), 'ro', 'validators');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/plugins.ka.yml'), 'ka', 'plugins');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/tiny_media_plugin.nb_NO.yml'), 'nb_NO', 'tiny_media_plugin');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_files.he.yml'), 'he', 'article_files');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/topics.pt_BR.yml'), 'pt_BR', 'topics');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_topics.uk.yml'), 'uk', 'article_topics');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/tiny_media_plugin.fr.yml'), 'fr', 'tiny_media_plugin');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/user_types.es_AR.yml'), 'es_AR', 'user_types');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/languages.de_AT.yml'), 'de_AT', 'languages');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/geolocation.es_AR.yml'), 'es_AR', 'geolocation');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/country.de.yml'), 'de', 'country');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/support.en_GB.yml'), 'en_GB', 'support');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/issues.el.yml'), 'el', 'issues');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/geolocation.pa.yml'), 'pa', 'geolocation');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_images.es.yml'), 'es', 'article_images');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/new_comments.es_AR.yml'), 'es_AR', 'new_comments');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/user_subscriptions.de.yml'), 'de', 'user_subscriptions');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/themes.ku.yml'), 'ku', 'themes');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/preview.hu.yml'), 'hu', 'preview');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/logs.en.yml'), 'en', 'logs');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/support.nl.yml'), 'nl', 'support');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/plugins_manager.ro.yml'), 'ro', 'plugins_manager');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/plugins.it.yml'), 'it', 'plugins');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/topics.da.yml'), 'da', 'topics');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_types.fr.yml'), 'fr', 'article_types');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/user_subscription_sections.da.yml'), 'da', 'user_subscription_sections');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/library.az.yml'), 'az', 'library');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/plugins_manager.es_AR.yml'), 'es_AR', 'plugins_manager');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/api.fa.yml'), 'fa', 'api');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/new_comments.pl.yml'), 'pl', 'new_comments');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/plugins_manager.he.yml'), 'he', 'plugins_manager');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/plugins.fa.yml'), 'fa', 'plugins');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/plugins_manager.sh.yml'), 'sh', 'plugins_manager');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/country.ko.yml'), 'ko', 'country');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/home.en_GB.yml'), 'en_GB', 'home');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/geolocation.nl.yml'), 'nl', 'geolocation');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_images.ro.yml'), 'ro', 'article_images');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/extensions.ps.yml'), 'ps', 'extensions');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/geolocation.hy_AM.yml'), 'hy_AM', 'geolocation');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/pub.sh.yml'), 'sh', 'pub');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/articles.en_GB.yml'), 'en_GB', 'articles');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/tiny_media_plugin.en.yml'), 'en', 'tiny_media_plugin');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/pub.ru.yml'), 'ru', 'pub');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_images.hu.yml'), 'hu', 'article_images');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_type_fields.cs.yml'), 'cs', 'article_type_fields');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/plugins.sq.yml'), 'sq', 'plugins');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/support.sr.yml'), 'sr', 'support');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/pub.be.yml'), 'be', 'pub');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/extensions.ka.yml'), 'ka', 'extensions');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/topics.en.yml'), 'en', 'topics');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/logs.hy_AM.yml'), 'hy_AM', 'logs');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/new_comments.id.yml'), 'id', 'new_comments');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/authors.ka.yml'), 'ka', 'authors');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/tiny_media_plugin.el.yml'), 'el', 'tiny_media_plugin');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/extensions.en_GB.yml'), 'en_GB', 'extensions');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/topics.az.yml'), 'az', 'topics');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/feedback.ka.yml'), 'ka', 'feedback');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/extensions.it.yml'), 'it', 'extensions');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/media_archive.fa_AF.yml'), 'fa_AF', 'media_archive');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/helpers.he.yml'), 'he', 'helpers');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/help.fr.yml'), 'fr', 'help');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/new_comments.ko.yml'), 'ko', 'new_comments');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/authors.hy_AM.yml'), 'hy_AM', 'authors');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/library.hr.yml'), 'hr', 'library');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_files.ar.yml'), 'ar', 'article_files');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_types.sq.yml'), 'sq', 'article_types');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_types.fa_AF.yml'), 'fa_AF', 'article_types');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/tiny_media_plugin.en_GB.yml'), 'en_GB', 'tiny_media_plugin');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/system_pref.de.yml'), 'de', 'system_pref');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/logs.hy.yml'), 'hy', 'logs');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/helpers.sq.yml'), 'sq', 'helpers');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/country.pt.yml'), 'pt', 'country');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/user_subscriptions.fr.yml'), 'fr', 'user_subscriptions');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/system_pref.hr.yml'), 'hr', 'system_pref');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/logs.sq.yml'), 'sq', 'logs');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/extensions.hu.yml'), 'hu', 'extensions');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/issues.fr.yml'), 'fr', 'issues');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_files.hu.yml'), 'hu', 'article_files');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/library.id.yml'), 'id', 'library');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_topics.de.yml'), 'de', 'article_topics');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/country.tr.yml'), 'tr', 'country');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/messages.hr.yml'), 'hr', 'messages');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/user_types.nb_NO.yml'), 'nb_NO', 'user_types');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_files.da.yml'), 'da', 'article_files');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/validators.da.yml'), 'da', 'validators');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/plugins_manager.be.yml'), 'be', 'plugins_manager');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_files.nb_NO.yml'), 'nb_NO', 'article_files');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/pub.el.yml'), 'el', 'pub');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/support.ps.yml'), 'ps', 'support');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/validators.ku.yml'), 'ku', 'validators');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/pub.ar.yml'), 'ar', 'pub');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/bug_reporting.ko.yml'), 'ko', 'bug_reporting');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/messages.pt.yml'), 'pt', 'messages');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/logs.pa.yml'), 'pa', 'logs');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/themes.pt.yml'), 'pt', 'themes');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/sections.ko.yml'), 'ko', 'sections');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/home.de_AT.yml'), 'de_AT', 'home');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/authors.hu.yml'), 'hu', 'authors');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_types.ka.yml'), 'ka', 'article_types');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/languages.es.yml'), 'es', 'languages');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/issues.en.yml'), 'en', 'issues');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/user_subscription_sections.nb_NO.yml'), 'nb_NO', 'user_subscription_sections');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/users.hy_AM.yml'), 'hy_AM', 'users');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/feedback.be.yml'), 'be', 'feedback');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/issues.he.yml'), 'he', 'issues');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/library.sv.yml'), 'sv', 'library');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/system_pref.ro.yml'), 'ro', 'system_pref');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_files.de.yml'), 'de', 'article_files');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/sections.uk.yml'), 'uk', 'sections');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/validators.fa_AF.yml'), 'fa_AF', 'validators');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/bug_reporting.fa.yml'), 'fa', 'bug_reporting');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_type_fields.pt_BR.yml'), 'pt_BR', 'article_type_fields');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/pub.nl.yml'), 'nl', 'pub');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/authors.en_GB.yml'), 'en_GB', 'authors');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/themes.en.yml'), 'en', 'themes');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/plugins.de_AT.yml'), 'de_AT', 'plugins');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/help.ro.yml'), 'ro', 'help');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/plugins_manager.ku.yml'), 'ku', 'plugins_manager');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/api.ru.yml'), 'ru', 'api');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/sections.ku.yml'), 'ku', 'sections');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_type_fields.be.yml'), 'be', 'article_type_fields');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/users.ka.yml'), 'ka', 'users');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/user_types.cs.yml'), 'cs', 'user_types');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_comments.fa_AF.yml'), 'fa_AF', 'article_comments');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/library.bn.yml'), 'bn', 'library');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_types.es_AR.yml'), 'es_AR', 'article_types');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_images.fa_AF.yml'), 'fa_AF', 'article_images');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/users.ru.yml'), 'ru', 'users');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_files.sh.yml'), 'sh', 'article_files');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/geolocation.hr.yml'), 'hr', 'geolocation');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/logs.hr.yml'), 'hr', 'logs');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/api.pa.yml'), 'pa', 'api');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/article_comments.fa.yml'), 'fa', 'article_comments');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/comments.fr.yml'), 'fr', 'comments');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/issues.pt_BR.yml'), 'pt_BR', 'issues');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/home.da.yml'), 'da', 'home');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/plugins_manager.fr.yml'), 'fr', 'plugins_manager');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/extensions.da.yml'), 'da', 'extensions');
        $instance->addResource('yml', ($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/translations/help.he.yml'), 'he', 'help');
        return $instance;
    }
    protected function getTwigService()
    {
        $this->services['twig'] = $instance = new \Twig_Environment($this->get('twig.loader'), array('debug' => false, 'strict_variables' => false, 'exception_controller' => 'Newscoop\\GimmeBundle\\Controller\\ExceptionController::showAction', 'autoescape' => array(0 => 'Symfony\\Bundle\\TwigBundle\\TwigDefaultEscapingStrategy', 1 => 'guess'), 'cache' => (__DIR__.'/twig'), 'charset' => 'UTF-8', 'paths' => array()));
        $instance->addExtension(new \Symfony\Bundle\SecurityBundle\Twig\Extension\LogoutUrlExtension($this->get('templating.helper.logout_url')));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\SecurityExtension($this->get('security.context', ContainerInterface::NULL_ON_INVALID_REFERENCE)));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\TranslationExtension($this->get('translator.default')));
        $instance->addExtension(new \Symfony\Bundle\TwigBundle\Extension\AssetsExtension($this, $this->get('router.request_context', ContainerInterface::NULL_ON_INVALID_REFERENCE)));
        $instance->addExtension(new \Symfony\Bundle\TwigBundle\Extension\ActionsExtension($this));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\CodeExtension(NULL, ($this->targetDirs[2].'/application'), 'UTF-8'));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\RoutingExtension($this->get('router')));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\YamlExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\StopwatchExtension(NULL));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\ExpressionExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpKernelExtension($this->get('fragment.handler')));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\FormExtension(new \Symfony\Bridge\Twig\Form\TwigRenderer(new \Symfony\Bridge\Twig\Form\TwigRendererEngine(array(0 => 'form_div_layout.html.twig', 1 => 'EWZRecaptchaBundle:Form:ewz_recaptcha_widget.html.twig')), $this->get('form.csrf_provider', ContainerInterface::NULL_ON_INVALID_REFERENCE))));
        $instance->addExtension(new \Symfony\Bundle\AsseticBundle\Twig\AsseticExtension($this->get('assetic.asset_factory'), $this->get('templating.name_parser'), false, array(), array(0 => 'FrameworkBundle', 1 => 'SecurityBundle', 2 => 'TwigBundle', 3 => 'MonologBundle', 4 => 'SwiftmailerBundle', 5 => 'AsseticBundle', 6 => 'DoctrineBundle', 7 => 'SensioFrameworkExtraBundle', 8 => 'JMSSerializerBundle', 9 => 'FOSRestBundle', 10 => 'NewscoopGimmeBundle', 11 => 'KnpPaginatorBundle', 12 => 'KnpMenuBundle', 13 => 'EWZRecaptchaBundle', 14 => 'FOSJsRoutingBundle', 15 => 'BazingaJsTranslationBundle', 16 => 'FOSOAuthServerBundle', 17 => 'NelmioApiDocBundle', 18 => 'NewscoopZendBridgeBundle', 19 => 'NewscoopNewscoopBundle', 20 => 'NewscoopCommunityTickerBundle', 21 => 'NewscoopArticlesBundle', 22 => 'StofDoctrineExtensionsBundle', 23 => 'SensioGeneratorBundle', 24 => 'NewscoopPluginGeneratorBundle'), new \Symfony\Bundle\AsseticBundle\DefaultValueSupplier($this)));
        $instance->addExtension(new \Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension());
        $instance->addExtension(new \JMS\Serializer\Twig\SerializerExtension($this->get('jms_serializer')));
        $instance->addExtension($this->get('knp_paginator.twig.extension.pagination'));
        $instance->addExtension(new \Knp\Menu\Twig\MenuExtension(new \Knp\Menu\Twig\Helper($this->get('knp_menu.renderer_provider'), $this->get('knp_menu.menu_provider'))));
        $instance->addExtension($this->get('nelmio_api_doc.twig.extension.extra_markdown'));
        $instance->addExtension($this->get('newscoop_newscoop.twig.newscoop_extension'));
        $instance->addExtension($this->get('newscoop_newscoop.twig.include_as_verbatim_extension'));
        $instance->addGlobal('app', $this->get('templating.globals'));
        return $instance;
    }
    protected function getTwig_Controller_ExceptionService()
    {
        return $this->services['twig.controller.exception'] = new \Symfony\Bundle\TwigBundle\Controller\ExceptionController($this->get('twig'), false);
    }
    protected function getTwig_ExceptionListenerService()
    {
        return $this->services['twig.exception_listener'] = new \Newscoop\GimmeBundle\EventListener\ExceptionListener('Newscoop\\GimmeBundle\\Controller\\ExceptionController::showAction', $this->get('monolog.logger.request', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }
    protected function getTwig_LoaderService()
    {
        $this->services['twig.loader'] = $instance = new \Symfony\Bundle\TwigBundle\Loader\FilesystemLoader($this->get('templating.locator'), $this->get('templating.name_parser'));
        $instance->addPath(($this->targetDirs[2].'/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views'), 'Framework');
        $instance->addPath(($this->targetDirs[2].'/vendor/symfony/symfony/src/Symfony/Bundle/SecurityBundle/Resources/views'), 'Security');
        $instance->addPath(($this->targetDirs[2].'/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views'), 'Twig');
        $instance->addPath(($this->targetDirs[2].'/vendor/symfony/swiftmailer-bundle/Resources/views'), 'Swiftmailer');
        $instance->addPath(($this->targetDirs[2].'/vendor/doctrine/doctrine-bundle/Doctrine/Bundle/DoctrineBundle/Resources/views'), 'Doctrine');
        $instance->addPath(($this->targetDirs[2].'/src/Newscoop/GimmeBundle/Resources/views'), 'NewscoopGimme');
        $instance->addPath(($this->targetDirs[2].'/vendor/knplabs/knp-paginator-bundle/Knp/Bundle/PaginatorBundle/Resources/views'), 'KnpPaginator');
        $instance->addPath(($this->targetDirs[2].'/vendor/newscoop/recaptcha-bundle/EWZ/Bundle/RecaptchaBundle/Resources/views'), 'EWZRecaptcha');
        $instance->addPath(($this->targetDirs[2].'/vendor/willdurand/js-translation-bundle/Bazinga/Bundle/JsTranslationBundle/Resources/views'), 'BazingaJsTranslation');
        $instance->addPath(($this->targetDirs[2].'/vendor/friendsofsymfony/oauth-server-bundle/FOS/OAuthServerBundle/Resources/views'), 'FOSOAuthServer');
        $instance->addPath(($this->targetDirs[2].'/vendor/nelmio/api-doc-bundle/Nelmio/ApiDocBundle/Resources/views'), 'NelmioApiDoc');
        $instance->addPath(($this->targetDirs[2].'/src/Newscoop/NewscoopBundle/Resources/views'), 'NewscoopNewscoop');
        $instance->addPath(($this->targetDirs[2].'/src/Newscoop/ArticlesBundle/Resources/views'), 'NewscoopArticles');
        $instance->addPath(($this->targetDirs[2].'/src/Newscoop/PluginGeneratorBundle/Resources/views'), 'NewscoopPluginGenerator');
        $instance->addPath(($this->targetDirs[2].'/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form'));
        $instance->addPath(($this->targetDirs[2].'/vendor/knplabs/knp-menu/src/Knp/Menu/Resources/views'));
        return $instance;
    }
    protected function getTwig_Translation_ExtractorService()
    {
        return $this->services['twig.translation.extractor'] = new \Symfony\Bridge\Twig\Translation\TwigExtractor($this->get('twig'));
    }
    protected function getUriSignerService()
    {
        return $this->services['uri_signer'] = new \Symfony\Component\HttpKernel\UriSigner('pleaseChangeMe!pleaseChangeMe!');
    }
    protected function getUserService()
    {
        return $this->services['user'] = new \Newscoop\Services\UserService($this->get('doctrine.orm.default_entity_manager'), $this->get('zend_auth'), $this->get('security.context'));
    }
    protected function getUser_GarbageService()
    {
        return $this->services['user.garbage'] = new \Newscoop\Services\GarbageCollectionService($this->get('doctrine.orm.default_entity_manager'));
    }
    protected function getUser_ListService()
    {
        return $this->services['user.list'] = new \Newscoop\Services\ListUserService(array('role' => '6', 'publication' => '5', 'issue' => '3', 'type' => 'bloginfo', 'article_type' => 'blog'), $this->get('doctrine.orm.default_entity_manager'));
    }
    protected function getUser_ManagerService()
    {
        return $this->services['user.manager'] = new \Newscoop\User\UserManager($this->get('doctrine.orm.default_entity_manager'));
    }
    protected function getUser_RepositoryService()
    {
        return $this->services['user.repository'] = $this->get('doctrine')->getRepository('\\Newscoop\\Entity\\User');
    }
    protected function getUser_SearchService()
    {
        return $this->services['user.search'] = new \Newscoop\Services\UserSearchService($this->get('doctrine.orm.default_entity_manager'));
    }
    protected function getUser_TokenService()
    {
        return $this->services['user.token'] = new \Newscoop\Services\UserTokenService($this->get('doctrine.orm.default_entity_manager'));
    }
    protected function getUser_TopicService()
    {
        return $this->services['user.topic'] = new \Newscoop\Services\UserTopicService($this->get('doctrine.orm.default_entity_manager'), $this->get('event_dispatcher'));
    }
    protected function getUserAttributesService()
    {
        return $this->services['user_attributes'] = new \Newscoop\Services\UserAttributeService($this->get('doctrine.orm.default_entity_manager'));
    }
    protected function getUserPointsService()
    {
        return $this->services['user_points'] = new \Newscoop\Services\UserPointsService($this->get('doctrine.orm.default_entity_manager'));
    }
    protected function getUserTypeService()
    {
        return $this->services['user_type'] = new \Newscoop\Services\UserTypeService($this->get('doctrine.orm.default_entity_manager'));
    }
    protected function getValidatorService()
    {
        return $this->services['validator'] = $this->get('validator.builder')->getValidator();
    }
    protected function getValidator_BuilderService()
    {
        $this->services['validator.builder'] = $instance = \Symfony\Component\Validator\Validation::createValidatorBuilder();
        $instance->setConstraintValidatorFactory(new \Symfony\Bundle\FrameworkBundle\Validator\ConstraintValidatorFactory($this, array('validator.expression' => 'validator.expression', 'Symfony\\Component\\Validator\\Constraints\\EmailValidator' => 'validator.email', 'security.validator.user_password' => 'security.validator.user_password', 'doctrine.orm.validator.unique' => 'doctrine.orm.validator.unique', 'ewz_recaptcha.true' => 'ewz_recaptcha.validator.true')));
        $instance->setTranslator($this->get('translator.default'));
        $instance->setTranslationDomain('validators');
        $instance->addXmlMappings(array(0 => ($this->targetDirs[2].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/config/validation.xml'), 1 => ($this->targetDirs[2].'/vendor/friendsofsymfony/oauth-server-bundle/FOS/OAuthServerBundle/Resources/config/validation.xml')));
        $instance->enableAnnotationMapping($this->get('annotation_reader'));
        $instance->addMethodMapping('loadValidatorMetadata');
        $instance->setApiVersion(3);
        $instance->addObjectInitializers(array(0 => $this->get('doctrine.orm.validator_initializer')));
        return $instance;
    }
    protected function getValidator_EmailService()
    {
        return $this->services['validator.email'] = new \Symfony\Component\Validator\Constraints\EmailValidator(false);
    }
    protected function getValidator_ExpressionService()
    {
        return $this->services['validator.expression'] = new \Symfony\Component\Validator\Constraints\ExpressionValidator($this->get('property_accessor'));
    }
    protected function getViewService()
    {
        return $this->services['view'] = \Newscoop\View\ViewFactory::getView();
    }
    protected function getView_Helper_RenditionService()
    {
        return $this->services['view.helper.rendition'] = new \Newscoop\Image\RenditionViewHelper($this->get('image'));
    }
    protected function getView_Helper_ThumbnailService()
    {
        return $this->services['view.helper.thumbnail'] = new \Newscoop\Image\ThumbnailViewHelper($this->get('image'));
    }
    protected function getWebcodeService()
    {
        return $this->services['webcode'] = new \Newscoop\WebcodeFacade($this->get('doctrine.orm.default_entity_manager'), $this->get('random'));
    }
    protected function getZendAuthService()
    {
        return $this->services['zend_auth'] = \Zend_Auth::getInstance();
    }
    protected function getZendRouterService()
    {
        return $this->services['zend_router'] = \Newscoop\Router\RouterFactory::initRouter($this);
    }
    protected function getAssetic_AssetFactoryService()
    {
        return $this->services['assetic.asset_factory'] = new \Symfony\Bundle\AsseticBundle\Factory\AssetFactory($this->get('kernel'), $this, $this->getParameterBag(), ($this->targetDirs[2].'/application/../web'), false);
    }
    protected function getControllerNameConverterService()
    {
        return $this->services['controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser($this->get('kernel'));
    }
    protected function getControllerResolverService()
    {
        return $this->services['controller_resolver'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver($this, $this->get('controller_name_converter'), $this->get('monolog.logger.request', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }
    protected function getFosOauthServer_EntityManagerService()
    {
        return $this->services['fos_oauth_server.entity_manager'] = $this->get('doctrine')->getManager(NULL);
    }
    protected function getJmsSerializer_MetadataFactoryService()
    {
        $this->services['jms_serializer.metadata_factory'] = $instance = new \Metadata\MetadataFactory(new \Metadata\Driver\LazyLoadingDriver($this, 'jms_serializer.metadata_driver'), 'Metadata\\ClassHierarchyMetadata', false);
        $instance->setCache(new \Metadata\Cache\FileCache((__DIR__.'/jms_serializer')));
        return $instance;
    }
    protected function getJmsSerializer_UnserializeObjectConstructorService()
    {
        return $this->services['jms_serializer.unserialize_object_constructor'] = new \JMS\Serializer\Construction\UnserializeObjectConstructor();
    }
    protected function getRouter_RequestContextService()
    {
        return $this->services['router.request_context'] = new \Symfony\Component\Routing\RequestContext('', 'GET', 'localhost', 'http', 80, 443);
    }
    protected function getSecurity_Access_DecisionManagerService()
    {
        $a = $this->get('security.role_hierarchy');
        $b = $this->get('security.authentication.trust_resolver');
        return $this->services['security.access.decision_manager'] = new \Symfony\Component\Security\Core\Authorization\AccessDecisionManager(array(0 => new \Symfony\Component\Security\Core\Authorization\Voter\RoleHierarchyVoter($a), 1 => new \Symfony\Component\Security\Core\Authorization\Voter\ExpressionVoter(new \Symfony\Component\Security\Core\Authorization\ExpressionLanguage(), $b, $a), 2 => new \Symfony\Component\Security\Core\Authorization\Voter\AuthenticatedVoter($b)), 'affirmative', false, true);
    }
    protected function getSecurity_AccessListenerService()
    {
        return $this->services['security.access_listener'] = new \Symfony\Component\Security\Http\Firewall\AccessListener($this->get('security.context'), $this->get('security.access.decision_manager'), $this->get('security.access_map'), $this->get('security.authentication.manager'));
    }
    protected function getSecurity_AccessMapService()
    {
        $this->services['security.access_map'] = $instance = new \Symfony\Component\Security\Http\AccessMap();
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/admin/login'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/oauth/v2/auth_login$'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        return $instance;
    }
    protected function getSecurity_Authentication_ManagerService()
    {
        $a = $this->get('security.encoder_factory');
        $b = $this->get('security.user.provider.concrete.chain_provider');
        $c = new \Symfony\Component\Security\Core\User\UserChecker();
        $this->services['security.authentication.manager'] = $instance = new \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager(array(0 => new \Symfony\Component\Security\Core\Authentication\Provider\DaoAuthenticationProvider($this->get('security.user.provider.concrete.backend_db'), $c, 'oauth_authorize', $a, true), 1 => new \FOS\OAuthServerBundle\Security\Authentication\Provider\OAuthProvider($b, $this->get('fos_oauth_server.server'), $c), 2 => new \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider('56c6195b25265'), 3 => new \Symfony\Component\Security\Core\Authentication\Provider\DaoAuthenticationProvider($b, $c, 'admin_area', $a, true), 4 => new \Symfony\Component\Security\Core\Authentication\Provider\RememberMeAuthenticationProvider($c, 'changeme', 'admin_area'), 5 => new \Symfony\Component\Security\Core\Authentication\Provider\DaoAuthenticationProvider($this->get('security.user.provider.concrete.frontend_db'), $c, 'frontend_area', $a, true), 6 => new \Symfony\Component\Security\Core\Authentication\Provider\RememberMeAuthenticationProvider($c, 'changeme', 'frontend_area'), 7 => new \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider('56c6195b25265')), true);
        $instance->setEventDispatcher($this->get('event_dispatcher'));
        return $instance;
    }
    protected function getSecurity_Authentication_SessionStrategyService()
    {
        return $this->services['security.authentication.session_strategy'] = new \Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy('migrate');
    }
    protected function getSecurity_Authentication_TrustResolverService()
    {
        return $this->services['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver('Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken', 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken');
    }
    protected function getSecurity_ChannelListenerService()
    {
        return $this->services['security.channel_listener'] = new \Symfony\Component\Security\Http\Firewall\ChannelListener($this->get('security.access_map'), new \Symfony\Component\Security\Http\EntryPoint\RetryAuthenticationEntryPoint(80, 443), $this->get('monolog.logger.security', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }
    protected function getSecurity_HttpUtilsService()
    {
        $a = $this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        return $this->services['security.http_utils'] = new \Symfony\Component\Security\Http\HttpUtils($a, $a);
    }
    protected function getSecurity_RoleHierarchyService()
    {
        return $this->services['security.role_hierarchy'] = new \Symfony\Component\Security\Core\Role\RoleHierarchy(array('ROLE_ADMIN' => array(0 => 'ROLE_USER'), 'ROLE_SUPER_ADMIN' => array(0 => 'ROLE_USER', 1 => 'ROLE_ADMIN', 2 => 'ROLE_ALLOWED_TO_SWITCH')));
    }
    protected function getSecurity_User_Provider_Concrete_BackendDbService()
    {
        return $this->services['security.user.provider.concrete.backend_db'] = new \Symfony\Bridge\Doctrine\Security\User\EntityUserProvider($this->get('doctrine'), 'Newscoop\\Entity\\User', 'username', NULL);
    }
    protected function getSecurity_User_Provider_Concrete_ChainProviderService()
    {
        return $this->services['security.user.provider.concrete.chain_provider'] = new \Symfony\Component\Security\Core\User\ChainUserProvider(array(0 => $this->get('security.user.provider.concrete.backend_db'), 1 => $this->get('newscoop_newscoop.simple_user_provider')));
    }
    protected function getSecurity_User_Provider_Concrete_FrontendDbService()
    {
        return $this->services['security.user.provider.concrete.frontend_db'] = new \Symfony\Bridge\Doctrine\Security\User\EntityUserProvider($this->get('doctrine'), 'Newscoop\\Entity\\User', 'email', NULL);
    }
    protected function getSession_Storage_MetadataBagService()
    {
        return $this->services['session.storage.metadata_bag'] = new \Symfony\Component\HttpFoundation\Session\Storage\MetadataBag('_sf2_meta', '0');
    }
    protected function getStofDoctrineExtensions_Listener_TranslatableService()
    {
        $this->services['stof_doctrine_extensions.listener.translatable'] = $instance = new \Gedmo\Translatable\TranslatableListener();
        $instance->setAnnotationReader($this->get('annotation_reader'));
        $instance->setDefaultLocale('en_US');
        $instance->setTranslatableLocale('en_US');
        $instance->setTranslationFallback(false);
        $instance->setPersistDefaultLocaleTranslation(false);
        $instance->setSkipOnLoad(false);
        return $instance;
    }
    protected function getTemplating_Engine_PhpService()
    {
        $this->services['templating.engine.php'] = $instance = new \Symfony\Bundle\FrameworkBundle\Templating\PhpEngine($this->get('templating.name_parser'), $this, $this->get('templating.loader'), $this->get('templating.globals'));
        $instance->setCharset('UTF-8');
        $instance->setHelpers(array('slots' => 'templating.helper.slots', 'assets' => 'templating.helper.assets', 'request' => 'templating.helper.request', 'session' => 'templating.helper.session', 'router' => 'templating.helper.router', 'actions' => 'templating.helper.actions', 'code' => 'templating.helper.code', 'translator' => 'templating.helper.translator', 'form' => 'templating.helper.form', 'stopwatch' => 'templating.helper.stopwatch', 'logout_url' => 'templating.helper.logout_url', 'security' => 'templating.helper.security', 'assetic' => 'assetic.helper.static', 'jms_serializer' => 'jms_serializer.templating.helper.serializer', 'knp_pagination' => 'knp_paginator.templating.helper.pagination'));
        return $instance;
    }
    protected function getTemplating_LocatorService()
    {
        return $this->services['templating.locator'] = new \Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator($this->get('file_locator'), __DIR__);
    }
    public function getParameter($name)
    {
        $name = strtolower($name);
        if (!(isset($this->parameters[$name]) || array_key_exists($name, $this->parameters))) {
            throw new InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
        }
        return $this->parameters[$name];
    }
    public function hasParameter($name)
    {
        $name = strtolower($name);
        return isset($this->parameters[$name]) || array_key_exists($name, $this->parameters);
    }
    public function setParameter($name, $value)
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }
    public function getParameterBag()
    {
        if (null === $this->parameterBag) {
            $this->parameterBag = new FrozenParameterBag($this->parameters);
        }
        return $this->parameterBag;
    }
    protected function getDefaultParameters()
    {
        return array(
            'kernel.root_dir' => ($this->targetDirs[2].'/application'),
            'kernel.environment' => 'prod',
            'kernel.debug' => false,
            'kernel.name' => 'application',
            'kernel.cache_dir' => __DIR__,
            'kernel.logs_dir' => ($this->targetDirs[2].'/log'),
            'kernel.bundles' => array(
                'FrameworkBundle' => 'Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle',
                'SecurityBundle' => 'Symfony\\Bundle\\SecurityBundle\\SecurityBundle',
                'TwigBundle' => 'Symfony\\Bundle\\TwigBundle\\TwigBundle',
                'MonologBundle' => 'Symfony\\Bundle\\MonologBundle\\MonologBundle',
                'SwiftmailerBundle' => 'Symfony\\Bundle\\SwiftmailerBundle\\SwiftmailerBundle',
                'AsseticBundle' => 'Symfony\\Bundle\\AsseticBundle\\AsseticBundle',
                'DoctrineBundle' => 'Doctrine\\Bundle\\DoctrineBundle\\DoctrineBundle',
                'SensioFrameworkExtraBundle' => 'Sensio\\Bundle\\FrameworkExtraBundle\\SensioFrameworkExtraBundle',
                'JMSSerializerBundle' => 'JMS\\SerializerBundle\\JMSSerializerBundle',
                'FOSRestBundle' => 'FOS\\RestBundle\\FOSRestBundle',
                'NewscoopGimmeBundle' => 'Newscoop\\GimmeBundle\\NewscoopGimmeBundle',
                'KnpPaginatorBundle' => 'Knp\\Bundle\\PaginatorBundle\\KnpPaginatorBundle',
                'KnpMenuBundle' => 'Knp\\Bundle\\MenuBundle\\KnpMenuBundle',
                'EWZRecaptchaBundle' => 'EWZ\\Bundle\\RecaptchaBundle\\EWZRecaptchaBundle',
                'FOSJsRoutingBundle' => 'FOS\\JsRoutingBundle\\FOSJsRoutingBundle',
                'BazingaJsTranslationBundle' => 'Bazinga\\Bundle\\JsTranslationBundle\\BazingaJsTranslationBundle',
                'FOSOAuthServerBundle' => 'FOS\\OAuthServerBundle\\FOSOAuthServerBundle',
                'NelmioApiDocBundle' => 'Nelmio\\ApiDocBundle\\NelmioApiDocBundle',
                'NewscoopZendBridgeBundle' => 'Newscoop\\ZendBridgeBundle\\NewscoopZendBridgeBundle',
                'NewscoopNewscoopBundle' => 'Newscoop\\NewscoopBundle\\NewscoopNewscoopBundle',
                'NewscoopCommunityTickerBundle' => 'Newscoop\\CommunityTickerBundle\\NewscoopCommunityTickerBundle',
                'NewscoopArticlesBundle' => 'Newscoop\\ArticlesBundle\\NewscoopArticlesBundle',
                'StofDoctrineExtensionsBundle' => 'Stof\\DoctrineExtensionsBundle\\StofDoctrineExtensionsBundle',
                'SensioGeneratorBundle' => 'Sensio\\Bundle\\GeneratorBundle\\SensioGeneratorBundle',
                'NewscoopPluginGeneratorBundle' => 'Newscoop\\PluginGeneratorBundle\\NewscoopPluginGeneratorBundle',
            ),
            'kernel.charset' => 'UTF-8',
            'kernel.container_class' => 'applicationProdProjectContainer',
            'application_path' => ($this->targetDirs[2].'/application'),
            'phpsettings' => array(
                'display_startup_errors' => '0',
                'display_errors' => '0',
            ),
            'includepaths' => array(
                'library' => ($this->targetDirs[2].'/application/../library'),
            ),
            'bootstrap' => array(
                'path' => ($this->targetDirs[2].'/application/Bootstrap.php'),
                'class' => 'Bootstrap',
            ),
            'appnamespace' => 'Application',
            'resources' => array(
                'frontController' => array(
                    'controllerDirectory' => ($this->targetDirs[2].'/application/controllers'),
                    'params' => array(
                        'displayExceptions' => '0',
                    ),
                    'moduleDirectory' => ($this->targetDirs[2].'/application/modules'),
                    'actionHelperPaths' => array(
                        'Action_Helper' => ($this->targetDirs[2].'/application/controllers/helpers'),
                    ),
                ),
                'layout' => array(
                    'layoutPath' => ($this->targetDirs[2].'/application/layouts/scripts/'),
                ),
                'view' => '',
                'modules' => array(
                    0 => '',
                ),
                'session' => array(
                    'throw_startup_exceptions' => false,
                ),
            ),
            'pluginpaths' => array(
                'Resource' => ($this->targetDirs[2].'/application/../library/Resource'),
            ),
            'session' => array(
                'cookie_path' => '/',
            ),
            'translation' => array(
                'path' => ($this->targetDirs[2].'/application/languages'),
            ),
            'doctrine' => array(
                'cache' => 'array',
                'entity' => array(
                    'dir' => ($this->targetDirs[2].'/application/../library/Newscoop'),
                ),
                'proxy' => array(
                    'dir' => ($this->targetDirs[2].'/application/../library/Proxy'),
                    'namespace' => 'Proxy',
                    'autogenerate' => false,
                ),
                'functions' => NULL,
            ),
            'admin' => array(
                'resources' => array(
                    'layout' => array(
                        'jsUrl' => '/js/app/admin',
                        'jsPath' => ($this->targetDirs[2].'/application/../js/app/admin'),
                        'layout' => 'admin',
                    ),
                    'acl' => array(
                        'modules' => array(
                            0 => 'admin',
                        ),
                        'cache' => 'Doctrine\\Common\\Cache\\ArrayCache',
                    ),
                    'view' => '',
                ),
            ),
            'autoloader' => array(
                'dirs' => array(
                    0 => ($this->targetDirs[2].'/application/../classes'),
                    1 => ($this->targetDirs[2].'/application/../classes/Extension'),
                    2 => ($this->targetDirs[2].'/application/../template_engine/classes'),
                    3 => ($this->targetDirs[2].'/application/../template_engine/metaclasses'),
                ),
            ),
            'resourcenames' => array(
                'Aliases' => 'alias',
                'ArticleAttachments' => 'article-attachment',
                'ArticleAuthors' => 'article-author',
                'ArticleImages' => 'article-image',
                'ArticlePublish' => 'article-publish',
                'Articles' => 'article',
                'ArticleTopics' => 'article-topic',
                'ArticleTypeMetadata' => 'article-metadata',
                'Attachments' => 'attachment',
                'AuditEvent' => 'audit-event',
                'AuthorAliases' => 'author-alias',
                'AuthorBiographies' => 'author-biography',
                'Authors' => 'author',
                'AuthorTypes' => 'author-type',
                'Countries' => 'county',
                'Images' => 'image',
                'Issues' => 'issue',
                'Languages' => 'language',
                'Locations' => 'location',
                'Maps' => 'map',
                'Plugins' => 'plugin',
                'Publication' => 'publication',
                'Sections' => 'section',
                'Subscriptions' => 'subscription',
                'SystemPreferences' => 'system-preferences',
                'Templates' => 'template',
                'Topics' => 'topic',
                'Translations' => 'translation',
            ),
            'auth' => array(
                'modules' => array(
                    0 => 'admin',
                ),
                'ignore' => array(
                    0 => 'auth',
                    1 => 'error',
                    2 => 'legacy',
                    3 => 'login.php',
                    4 => 'password_recovery.php',
                    5 => 'password_check_token.php',
                ),
            ),
            'acl' => array(
                'modules' => array(
                    0 => 'admin',
                ),
                'ignore' => array(
                    0 => 'auth',
                    1 => 'error',
                    2 => 'legacy',
                    3 => 'login.php',
                    4 => 'password_recovery.php',
                    5 => 'password_check_token.php',
                ),
            ),
            'email' => array(
                'from' => 'no-reply@domain.com',
                'contact' => 'info@domain.com',
            ),
            'blog' => array(
                'role' => '6',
                'publication' => '5',
                'issue' => '3',
                'type' => 'bloginfo',
                'article_type' => 'blog',
            ),
            'image' => array(
                'image_path' => ($this->targetDirs[2].'/application/../images/'),
                'image_prefix' => 'cms-image-',
                'thumbnail_path' => ($this->targetDirs[2].'/application/../images/thumbnails/'),
                'thumbnail_prefix' => 'cms-thumb-',
                'thumbnail_max_size' => '64',
                'cache_url' => 'images/cache',
                'cache_path' => ($this->targetDirs[2].'/application/../images/cache/'),
            ),
            'attachment' => array(
                'file_base_url' => 'files/',
                'file_directory' => ($this->targetDirs[2].'/application/../public/files/'),
                'file_num_dirs_level_1' => 1000,
                'file_num_dirs_level_2' => 1000,
            ),
            'subscriptions.service.class' => 'Newscoop\\Services\\SubscriptionService',
            'plugins' => array(
                'internal_memory_limit' => '',
            ),
            'scheduler' => array(
                'environment' => 'cli',
            ),
            'simple_security' => array(
                'users_file' => ($this->targetDirs[2].'/application/configs/security/users.json'),
            ),
            'storage' => array(
                'local_directory' => ($this->targetDirs[2].'/application/..'),
            ),
            'controller_resolver.class' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\ControllerResolver',
            'controller_name_converter.class' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\ControllerNameParser',
            'response_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\ResponseListener',
            'streamed_response_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\StreamedResponseListener',
            'locale_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\LocaleListener',
            'event_dispatcher.class' => 'Symfony\\Component\\EventDispatcher\\ContainerAwareEventDispatcher',
            'http_kernel.class' => 'Symfony\\Component\\HttpKernel\\DependencyInjection\\ContainerAwareHttpKernel',
            'filesystem.class' => 'Symfony\\Component\\Filesystem\\Filesystem',
            'cache_warmer.class' => 'Symfony\\Component\\HttpKernel\\CacheWarmer\\CacheWarmerAggregate',
            'cache_clearer.class' => 'Symfony\\Component\\HttpKernel\\CacheClearer\\ChainCacheClearer',
            'file_locator.class' => 'Symfony\\Component\\HttpKernel\\Config\\FileLocator',
            'uri_signer.class' => 'Symfony\\Component\\HttpKernel\\UriSigner',
            'request_stack.class' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
            'fragment.handler.class' => 'Symfony\\Component\\HttpKernel\\Fragment\\FragmentHandler',
            'fragment.renderer.inline.class' => 'Symfony\\Component\\HttpKernel\\Fragment\\InlineFragmentRenderer',
            'fragment.renderer.hinclude.class' => 'Symfony\\Bundle\\FrameworkBundle\\Fragment\\ContainerAwareHIncludeFragmentRenderer',
            'fragment.renderer.hinclude.global_template' => NULL,
            'fragment.renderer.esi.class' => 'Symfony\\Component\\HttpKernel\\Fragment\\EsiFragmentRenderer',
            'fragment.path' => '/_fragment',
            'translator.class' => 'Symfony\\Bundle\\FrameworkBundle\\Translation\\Translator',
            'translator.identity.class' => 'Symfony\\Component\\Translation\\IdentityTranslator',
            'translator.selector.class' => 'Symfony\\Component\\Translation\\MessageSelector',
            'translation.loader.php.class' => 'Symfony\\Component\\Translation\\Loader\\PhpFileLoader',
            'translation.loader.yml.class' => 'Symfony\\Component\\Translation\\Loader\\YamlFileLoader',
            'translation.loader.xliff.class' => 'Symfony\\Component\\Translation\\Loader\\XliffFileLoader',
            'translation.loader.po.class' => 'Symfony\\Component\\Translation\\Loader\\PoFileLoader',
            'translation.loader.mo.class' => 'Symfony\\Component\\Translation\\Loader\\MoFileLoader',
            'translation.loader.qt.class' => 'Symfony\\Component\\Translation\\Loader\\QtFileLoader',
            'translation.loader.csv.class' => 'Symfony\\Component\\Translation\\Loader\\CsvFileLoader',
            'translation.loader.res.class' => 'Symfony\\Component\\Translation\\Loader\\IcuResFileLoader',
            'translation.loader.dat.class' => 'Symfony\\Component\\Translation\\Loader\\IcuDatFileLoader',
            'translation.loader.ini.class' => 'Symfony\\Component\\Translation\\Loader\\IniFileLoader',
            'translation.loader.json.class' => 'Symfony\\Component\\Translation\\Loader\\JsonFileLoader',
            'translation.dumper.php.class' => 'Symfony\\Component\\Translation\\Dumper\\PhpFileDumper',
            'translation.dumper.xliff.class' => 'Symfony\\Component\\Translation\\Dumper\\XliffFileDumper',
            'translation.dumper.po.class' => 'Symfony\\Component\\Translation\\Dumper\\PoFileDumper',
            'translation.dumper.mo.class' => 'Symfony\\Component\\Translation\\Dumper\\MoFileDumper',
            'translation.dumper.yml.class' => 'Symfony\\Component\\Translation\\Dumper\\YamlFileDumper',
            'translation.dumper.qt.class' => 'Symfony\\Component\\Translation\\Dumper\\QtFileDumper',
            'translation.dumper.csv.class' => 'Symfony\\Component\\Translation\\Dumper\\CsvFileDumper',
            'translation.dumper.ini.class' => 'Symfony\\Component\\Translation\\Dumper\\IniFileDumper',
            'translation.dumper.json.class' => 'Symfony\\Component\\Translation\\Dumper\\JsonFileDumper',
            'translation.dumper.res.class' => 'Symfony\\Component\\Translation\\Dumper\\IcuResFileDumper',
            'translation.extractor.php.class' => 'Symfony\\Bundle\\FrameworkBundle\\Translation\\PhpExtractor',
            'translation.loader.class' => 'Symfony\\Bundle\\FrameworkBundle\\Translation\\TranslationLoader',
            'translation.extractor.class' => 'Symfony\\Component\\Translation\\Extractor\\ChainExtractor',
            'translation.writer.class' => 'Symfony\\Component\\Translation\\Writer\\TranslationWriter',
            'property_accessor.class' => 'Symfony\\Component\\PropertyAccess\\PropertyAccessor',
            'debug.errors_logger_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\ErrorsLoggerListener',
            'kernel.secret' => 'pleaseChangeMe!pleaseChangeMe!',
            'kernel.http_method_override' => true,
            'kernel.trusted_hosts' => array(
            ),
            'kernel.trusted_proxies' => array(
            ),
            'kernel.default_locale' => 'en',
            'session.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Session',
            'session.flashbag.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Flash\\FlashBag',
            'session.attribute_bag.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Attribute\\AttributeBag',
            'session.storage.metadata_bag.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\MetadataBag',
            'session.metadata.storage_key' => '_sf2_meta',
            'session.storage.native.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\NativeSessionStorage',
            'session.storage.php_bridge.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\PhpBridgeSessionStorage',
            'session.storage.mock_file.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\MockFileSessionStorage',
            'session.handler.native_file.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\NativeFileSessionHandler',
            'session.handler.write_check.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\WriteCheckSessionHandler',
            'session_listener.class' => 'Symfony\\Bundle\\FrameworkBundle\\EventListener\\SessionListener',
            'session.storage.options' => array(
                'gc_probability' => 1,
            ),
            'session.save_path' => (__DIR__.'/sessions'),
            'session.metadata.update_threshold' => '0',
            'security.secure_random.class' => 'Symfony\\Component\\Security\\Core\\Util\\SecureRandom',
            'form.resolved_type_factory.class' => 'Symfony\\Component\\Form\\ResolvedFormTypeFactory',
            'form.registry.class' => 'Symfony\\Component\\Form\\FormRegistry',
            'form.factory.class' => 'Symfony\\Component\\Form\\FormFactory',
            'form.extension.class' => 'Symfony\\Component\\Form\\Extension\\DependencyInjection\\DependencyInjectionExtension',
            'form.type_guesser.validator.class' => 'Symfony\\Component\\Form\\Extension\\Validator\\ValidatorTypeGuesser',
            'form.type_extension.form.request_handler.class' => 'Symfony\\Component\\Form\\Extension\\HttpFoundation\\HttpFoundationRequestHandler',
            'form.type_extension.csrf.enabled' => true,
            'form.type_extension.csrf.field_name' => '_token',
            'security.csrf.token_generator.class' => 'Symfony\\Component\\Security\\Csrf\\TokenGenerator\\UriSafeTokenGenerator',
            'security.csrf.token_storage.class' => 'Symfony\\Component\\Security\\Csrf\\TokenStorage\\SessionTokenStorage',
            'security.csrf.token_manager.class' => 'Symfony\\Component\\Security\\Csrf\\CsrfTokenManager',
            'templating.engine.delegating.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\DelegatingEngine',
            'templating.name_parser.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\TemplateNameParser',
            'templating.filename_parser.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\TemplateFilenameParser',
            'templating.cache_warmer.template_paths.class' => 'Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\TemplatePathsCacheWarmer',
            'templating.locator.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Loader\\TemplateLocator',
            'templating.loader.filesystem.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Loader\\FilesystemLoader',
            'templating.loader.cache.class' => 'Symfony\\Component\\Templating\\Loader\\CacheLoader',
            'templating.loader.chain.class' => 'Symfony\\Component\\Templating\\Loader\\ChainLoader',
            'templating.finder.class' => 'Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\TemplateFinder',
            'templating.engine.php.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\PhpEngine',
            'templating.helper.slots.class' => 'Symfony\\Component\\Templating\\Helper\\SlotsHelper',
            'templating.helper.assets.class' => 'Symfony\\Component\\Templating\\Helper\\CoreAssetsHelper',
            'templating.helper.actions.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\ActionsHelper',
            'templating.helper.router.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\RouterHelper',
            'templating.helper.request.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\RequestHelper',
            'templating.helper.session.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\SessionHelper',
            'templating.helper.code.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\CodeHelper',
            'templating.helper.translator.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\TranslatorHelper',
            'templating.helper.form.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\FormHelper',
            'templating.helper.stopwatch.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\StopwatchHelper',
            'templating.form.engine.class' => 'Symfony\\Component\\Form\\Extension\\Templating\\TemplatingRendererEngine',
            'templating.form.renderer.class' => 'Symfony\\Component\\Form\\FormRenderer',
            'templating.globals.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\GlobalVariables',
            'templating.asset.path_package.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Asset\\PathPackage',
            'templating.asset.url_package.class' => 'Symfony\\Component\\Templating\\Asset\\UrlPackage',
            'templating.asset.package_factory.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Asset\\PackageFactory',
            'templating.helper.code.file_link_format' => NULL,
            'templating.helper.form.resources' => array(
                0 => 'FrameworkBundle:Form',
                1 => 'EWZRecaptchaBundle:Form',
            ),
            'templating.loader.cache.path' => NULL,
            'templating.engines' => array(
                0 => 'twig',
                1 => 'php',
            ),
            'validator.class' => 'Symfony\\Component\\Validator\\ValidatorInterface',
            'validator.builder.class' => 'Symfony\\Component\\Validator\\ValidatorBuilderInterface',
            'validator.builder.factory.class' => 'Symfony\\Component\\Validator\\Validation',
            'validator.mapping.cache.apc.class' => 'Symfony\\Component\\Validator\\Mapping\\Cache\\ApcCache',
            'validator.mapping.cache.prefix' => '',
            'validator.validator_factory.class' => 'Symfony\\Bundle\\FrameworkBundle\\Validator\\ConstraintValidatorFactory',
            'validator.expression.class' => 'Symfony\\Component\\Validator\\Constraints\\ExpressionValidator',
            'validator.email.class' => 'Symfony\\Component\\Validator\\Constraints\\EmailValidator',
            'validator.translation_domain' => 'validators',
            'validator.api' => 3,
            'fragment.listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\FragmentListener',
            'data_collector.templates' => array(
            ),
            'router.class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\Router',
            'router.request_context.class' => 'Symfony\\Component\\Routing\\RequestContext',
            'routing.loader.class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\DelegatingLoader',
            'routing.resolver.class' => 'Symfony\\Component\\Config\\Loader\\LoaderResolver',
            'routing.loader.xml.class' => 'Symfony\\Component\\Routing\\Loader\\XmlFileLoader',
            'routing.loader.yml.class' => 'Symfony\\Component\\Routing\\Loader\\YamlFileLoader',
            'routing.loader.php.class' => 'Symfony\\Component\\Routing\\Loader\\PhpFileLoader',
            'router.options.generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator',
            'router.options.generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator',
            'router.options.generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper',
            'router.options.matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher',
            'router.options.matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher',
            'router.options.matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper',
            'router.cache_warmer.class' => 'Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\RouterCacheWarmer',
            'router.options.matcher.cache_class' => 'applicationProdUrlMatcher',
            'router.options.generator.cache_class' => 'applicationProdUrlGenerator',
            'router_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\RouterListener',
            'router.request_context.host' => 'localhost',
            'router.request_context.scheme' => 'http',
            'router.request_context.base_url' => '',
            'router.resource' => ($this->targetDirs[2].'/application/configs/symfony/routing.yml'),
            'router.cache_class_prefix' => 'applicationProd',
            'request_listener.http_port' => 80,
            'request_listener.https_port' => 443,
            'annotations.reader.class' => 'Doctrine\\Common\\Annotations\\AnnotationReader',
            'annotations.cached_reader.class' => 'Doctrine\\Common\\Annotations\\CachedReader',
            'annotations.file_cache_reader.class' => 'Doctrine\\Common\\Annotations\\FileCacheReader',
            'security.context.class' => 'Symfony\\Component\\Security\\Core\\SecurityContext',
            'security.user_checker.class' => 'Symfony\\Component\\Security\\Core\\User\\UserChecker',
            'security.encoder_factory.generic.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\EncoderFactory',
            'security.encoder.digest.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\MessageDigestPasswordEncoder',
            'security.encoder.plain.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\PlaintextPasswordEncoder',
            'security.encoder.pbkdf2.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\Pbkdf2PasswordEncoder',
            'security.encoder.bcrypt.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\BCryptPasswordEncoder',
            'security.user.provider.in_memory.class' => 'Symfony\\Component\\Security\\Core\\User\\InMemoryUserProvider',
            'security.user.provider.in_memory.user.class' => 'Symfony\\Component\\Security\\Core\\User\\User',
            'security.user.provider.chain.class' => 'Symfony\\Component\\Security\\Core\\User\\ChainUserProvider',
            'security.authentication.trust_resolver.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationTrustResolver',
            'security.authentication.trust_resolver.anonymous_class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken',
            'security.authentication.trust_resolver.rememberme_class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken',
            'security.authentication.manager.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationProviderManager',
            'security.authentication.session_strategy.class' => 'Symfony\\Component\\Security\\Http\\Session\\SessionAuthenticationStrategy',
            'security.access.decision_manager.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\AccessDecisionManager',
            'security.access.simple_role_voter.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\Voter\\RoleVoter',
            'security.access.authenticated_voter.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\Voter\\AuthenticatedVoter',
            'security.access.role_hierarchy_voter.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\Voter\\RoleHierarchyVoter',
            'security.access.expression_voter.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\Voter\\ExpressionVoter',
            'security.firewall.class' => 'Symfony\\Component\\Security\\Http\\Firewall',
            'security.firewall.map.class' => 'Symfony\\Bundle\\SecurityBundle\\Security\\FirewallMap',
            'security.firewall.context.class' => 'Symfony\\Bundle\\SecurityBundle\\Security\\FirewallContext',
            'security.matcher.class' => 'Symfony\\Component\\HttpFoundation\\RequestMatcher',
            'security.expression_matcher.class' => 'Symfony\\Component\\HttpFoundation\\ExpressionRequestMatcher',
            'security.role_hierarchy.class' => 'Symfony\\Component\\Security\\Core\\Role\\RoleHierarchy',
            'security.http_utils.class' => 'Symfony\\Component\\Security\\Http\\HttpUtils',
            'security.validator.user_password.class' => 'Symfony\\Component\\Security\\Core\\Validator\\Constraints\\UserPasswordValidator',
            'security.expression_language.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\ExpressionLanguage',
            'security.authentication.retry_entry_point.class' => 'Symfony\\Component\\Security\\Http\\EntryPoint\\RetryAuthenticationEntryPoint',
            'security.channel_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\ChannelListener',
            'security.authentication.form_entry_point.class' => 'Symfony\\Component\\Security\\Http\\EntryPoint\\FormAuthenticationEntryPoint',
            'security.authentication.listener.form.class' => 'Newscoop\\NewscoopBundle\\EventListener\\CaptchaUsernamePasswordFormAuthenticationListener',
            'security.authentication.listener.simple_form.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\SimpleFormAuthenticationListener',
            'security.authentication.listener.simple_preauth.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\SimplePreAuthenticationListener',
            'security.authentication.listener.basic.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\BasicAuthenticationListener',
            'security.authentication.basic_entry_point.class' => 'Symfony\\Component\\Security\\Http\\EntryPoint\\BasicAuthenticationEntryPoint',
            'security.authentication.listener.digest.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\DigestAuthenticationListener',
            'security.authentication.digest_entry_point.class' => 'Symfony\\Component\\Security\\Http\\EntryPoint\\DigestAuthenticationEntryPoint',
            'security.authentication.listener.x509.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\X509AuthenticationListener',
            'security.authentication.listener.anonymous.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\AnonymousAuthenticationListener',
            'security.authentication.switchuser_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\SwitchUserListener',
            'security.logout_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\LogoutListener',
            'security.logout.handler.session.class' => 'Symfony\\Component\\Security\\Http\\Logout\\SessionLogoutHandler',
            'security.logout.handler.cookie_clearing.class' => 'Symfony\\Component\\Security\\Http\\Logout\\CookieClearingLogoutHandler',
            'security.logout.success_handler.class' => 'Symfony\\Component\\Security\\Http\\Logout\\DefaultLogoutSuccessHandler',
            'security.access_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\AccessListener',
            'security.access_map.class' => 'Symfony\\Component\\Security\\Http\\AccessMap',
            'security.exception_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\ExceptionListener',
            'security.context_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\ContextListener',
            'security.authentication.provider.dao.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\DaoAuthenticationProvider',
            'security.authentication.provider.simple.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\SimpleAuthenticationProvider',
            'security.authentication.provider.pre_authenticated.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\PreAuthenticatedAuthenticationProvider',
            'security.authentication.provider.anonymous.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\AnonymousAuthenticationProvider',
            'security.authentication.success_handler.class' => 'Symfony\\Component\\Security\\Http\\Authentication\\DefaultAuthenticationSuccessHandler',
            'security.authentication.failure_handler.class' => 'Newscoop\\NewscoopBundle\\Security\\Http\\Authentication\\AuthenticationFailedHandler',
            'security.authentication.simple_success_failure_handler.class' => 'Symfony\\Component\\Security\\Http\\Authentication\\SimpleAuthenticationHandler',
            'security.authentication.provider.rememberme.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\RememberMeAuthenticationProvider',
            'security.authentication.listener.rememberme.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\RememberMeListener',
            'security.rememberme.token.provider.in_memory.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\RememberMe\\InMemoryTokenProvider',
            'security.authentication.rememberme.services.persistent.class' => 'Symfony\\Component\\Security\\Http\\RememberMe\\PersistentTokenBasedRememberMeServices',
            'security.authentication.rememberme.services.simplehash.class' => 'Newscoop\\NewscoopBundle\\Security\\Http\\Authentication\\InteractiveLogin',
            'security.rememberme.response_listener.class' => 'Symfony\\Component\\Security\\Http\\RememberMe\\ResponseListener',
            'templating.helper.logout_url.class' => 'Symfony\\Bundle\\SecurityBundle\\Templating\\Helper\\LogoutUrlHelper',
            'templating.helper.security.class' => 'Symfony\\Bundle\\SecurityBundle\\Templating\\Helper\\SecurityHelper',
            'twig.extension.logout_url.class' => 'Symfony\\Bundle\\SecurityBundle\\Twig\\Extension\\LogoutUrlExtension',
            'twig.extension.security.class' => 'Symfony\\Bridge\\Twig\\Extension\\SecurityExtension',
            'data_collector.security.class' => 'Symfony\\Bundle\\SecurityBundle\\DataCollector\\SecurityDataCollector',
            'security.access.denied_url' => NULL,
            'security.authentication.manager.erase_credentials' => true,
            'security.authentication.session_strategy.strategy' => 'migrate',
            'security.access.always_authenticate_before_granting' => false,
            'security.authentication.hide_user_not_found' => true,
            'security.role_hierarchy.roles' => array(
                'ROLE_ADMIN' => array(
                    0 => 'ROLE_USER',
                ),
                'ROLE_SUPER_ADMIN' => array(
                    0 => 'ROLE_USER',
                    1 => 'ROLE_ADMIN',
                    2 => 'ROLE_ALLOWED_TO_SWITCH',
                ),
            ),
            'twig.class' => 'Twig_Environment',
            'twig.loader.filesystem.class' => 'Symfony\\Bundle\\TwigBundle\\Loader\\FilesystemLoader',
            'twig.loader.chain.class' => 'Twig_Loader_Chain',
            'templating.engine.twig.class' => 'Symfony\\Bundle\\TwigBundle\\TwigEngine',
            'twig.cache_warmer.class' => 'Symfony\\Bundle\\TwigBundle\\CacheWarmer\\TemplateCacheCacheWarmer',
            'twig.extension.trans.class' => 'Symfony\\Bridge\\Twig\\Extension\\TranslationExtension',
            'twig.extension.assets.class' => 'Symfony\\Bundle\\TwigBundle\\Extension\\AssetsExtension',
            'twig.extension.actions.class' => 'Symfony\\Bundle\\TwigBundle\\Extension\\ActionsExtension',
            'twig.extension.code.class' => 'Symfony\\Bridge\\Twig\\Extension\\CodeExtension',
            'twig.extension.routing.class' => 'Symfony\\Bridge\\Twig\\Extension\\RoutingExtension',
            'twig.extension.yaml.class' => 'Symfony\\Bridge\\Twig\\Extension\\YamlExtension',
            'twig.extension.form.class' => 'Symfony\\Bridge\\Twig\\Extension\\FormExtension',
            'twig.extension.httpkernel.class' => 'Symfony\\Bridge\\Twig\\Extension\\HttpKernelExtension',
            'twig.extension.debug.stopwatch.class' => 'Symfony\\Bridge\\Twig\\Extension\\StopwatchExtension',
            'twig.extension.expression.class' => 'Symfony\\Bridge\\Twig\\Extension\\ExpressionExtension',
            'twig.form.engine.class' => 'Symfony\\Bridge\\Twig\\Form\\TwigRendererEngine',
            'twig.form.renderer.class' => 'Symfony\\Bridge\\Twig\\Form\\TwigRenderer',
            'twig.translation.extractor.class' => 'Symfony\\Bridge\\Twig\\Translation\\TwigExtractor',
            'twig.exception_listener.class' => 'Newscoop\\GimmeBundle\\EventListener\\ExceptionListener',
            'twig.controller.exception.class' => 'Symfony\\Bundle\\TwigBundle\\Controller\\ExceptionController',
            'twig.exception_listener.controller' => 'Newscoop\\GimmeBundle\\Controller\\ExceptionController::showAction',
            'twig.form.resources' => array(
                0 => 'form_div_layout.html.twig',
                1 => 'EWZRecaptchaBundle:Form:ewz_recaptcha_widget.html.twig',
            ),
            'twig.options' => array(
                'debug' => false,
                'strict_variables' => false,
                'exception_controller' => 'Newscoop\\GimmeBundle\\Controller\\ExceptionController::showAction',
                'autoescape' => array(
                    0 => 'Symfony\\Bundle\\TwigBundle\\TwigDefaultEscapingStrategy',
                    1 => 'guess',
                ),
                'cache' => (__DIR__.'/twig'),
                'charset' => 'UTF-8',
                'paths' => array(
                ),
            ),
            'monolog.logger.class' => 'Symfony\\Bridge\\Monolog\\Logger',
            'monolog.gelf.publisher.class' => 'Gelf\\MessagePublisher',
            'monolog.handler.stream.class' => 'Monolog\\Handler\\StreamHandler',
            'monolog.handler.console.class' => 'Symfony\\Bridge\\Monolog\\Handler\\ConsoleHandler',
            'monolog.handler.group.class' => 'Monolog\\Handler\\GroupHandler',
            'monolog.handler.buffer.class' => 'Monolog\\Handler\\BufferHandler',
            'monolog.handler.rotating_file.class' => 'Monolog\\Handler\\RotatingFileHandler',
            'monolog.handler.syslog.class' => 'Monolog\\Handler\\SyslogHandler',
            'monolog.handler.null.class' => 'Monolog\\Handler\\NullHandler',
            'monolog.handler.test.class' => 'Monolog\\Handler\\TestHandler',
            'monolog.handler.gelf.class' => 'Monolog\\Handler\\GelfHandler',
            'monolog.handler.firephp.class' => 'Symfony\\Bridge\\Monolog\\Handler\\FirePHPHandler',
            'monolog.handler.chromephp.class' => 'Symfony\\Bridge\\Monolog\\Handler\\ChromePhpHandler',
            'monolog.handler.debug.class' => 'Symfony\\Bridge\\Monolog\\Handler\\DebugHandler',
            'monolog.handler.swift_mailer.class' => 'Symfony\\Bridge\\Monolog\\Handler\\SwiftMailerHandler',
            'monolog.handler.native_mailer.class' => 'Monolog\\Handler\\NativeMailerHandler',
            'monolog.handler.socket.class' => 'Monolog\\Handler\\SocketHandler',
            'monolog.handler.pushover.class' => 'Monolog\\Handler\\PushoverHandler',
            'monolog.handler.raven.class' => 'Monolog\\Handler\\RavenHandler',
            'monolog.handler.newrelic.class' => 'Monolog\\Handler\\NewRelicHandler',
            'monolog.handler.hipchat.class' => 'Monolog\\Handler\\HipChatHandler',
            'monolog.handler.cube.class' => 'Monolog\\Handler\\CubeHandler',
            'monolog.handler.amqp.class' => 'Monolog\\Handler\\AmqpHandler',
            'monolog.handler.error_log.class' => 'Monolog\\Handler\\ErrorLogHandler',
            'monolog.handler.loggly.class' => 'Monolog\\Handler\\LogglyHandler',
            'monolog.activation_strategy.not_found.class' => 'Symfony\\Bundle\\MonologBundle\\NotFoundActivationStrategy',
            'monolog.handler.fingers_crossed.class' => 'Monolog\\Handler\\FingersCrossedHandler',
            'monolog.handler.fingers_crossed.error_level_activation_strategy.class' => 'Monolog\\Handler\\FingersCrossed\\ErrorLevelActivationStrategy',
            'monolog.handler.mongo.class' => 'Monolog\\Handler\\MongoDBHandler',
            'monolog.mongo.client.class' => 'MongoClient',
            'monolog.swift_mailer.handlers' => array(
            ),
            'monolog.handlers_to_channels' => array(
                'monolog.handler.main' => NULL,
                'monolog.handler.sentry' => array(
                    'type' => 'inclusive',
                    'elements' => array(
                        0 => 'sentry',
                        1 => 'sentry',
                    ),
                ),
            ),
            'swiftmailer.class' => 'Swift_Mailer',
            'swiftmailer.transport.sendmail.class' => 'Swift_Transport_SendmailTransport',
            'swiftmailer.transport.mail.class' => 'Swift_Transport_MailTransport',
            'swiftmailer.transport.failover.class' => 'Swift_Transport_FailoverTransport',
            'swiftmailer.plugin.redirecting.class' => 'Swift_Plugins_RedirectingPlugin',
            'swiftmailer.plugin.impersonate.class' => 'Swift_Plugins_ImpersonatePlugin',
            'swiftmailer.plugin.messagelogger.class' => 'Swift_Plugins_MessageLogger',
            'swiftmailer.plugin.antiflood.class' => 'Swift_Plugins_AntiFloodPlugin',
            'swiftmailer.transport.smtp.class' => 'Swift_Transport_EsmtpTransport',
            'swiftmailer.plugin.blackhole.class' => 'Swift_Plugins_BlackholePlugin',
            'swiftmailer.spool.file.class' => 'Swift_FileSpool',
            'swiftmailer.spool.memory.class' => 'Swift_MemorySpool',
            'swiftmailer.email_sender.listener.class' => 'Symfony\\Bundle\\SwiftmailerBundle\\EventListener\\EmailSenderListener',
            'swiftmailer.data_collector.class' => 'Symfony\\Bundle\\SwiftmailerBundle\\DataCollector\\MessageDataCollector',
            'swiftmailer.mailer.default.transport.name' => 'smtp',
            'swiftmailer.mailer.default.delivery.enabled' => true,
            'swiftmailer.mailer.default.transport.smtp.encryption' => NULL,
            'swiftmailer.mailer.default.transport.smtp.port' => 25,
            'swiftmailer.mailer.default.transport.smtp.host' => 'localhost',
            'swiftmailer.mailer.default.transport.smtp.username' => NULL,
            'swiftmailer.mailer.default.transport.smtp.password' => NULL,
            'swiftmailer.mailer.default.transport.smtp.auth_mode' => NULL,
            'swiftmailer.mailer.default.transport.smtp.timeout' => 30,
            'swiftmailer.mailer.default.transport.smtp.source_ip' => NULL,
            'swiftmailer.mailer.default.spool.enabled' => false,
            'swiftmailer.mailer.default.plugin.impersonate' => NULL,
            'swiftmailer.mailer.default.single_address' => NULL,
            'swiftmailer.spool.enabled' => false,
            'swiftmailer.delivery.enabled' => true,
            'swiftmailer.single_address' => NULL,
            'swiftmailer.mailers' => array(
                'default' => 'swiftmailer.mailer.default',
            ),
            'swiftmailer.default_mailer' => 'default',
            'assetic.asset_factory.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\AssetFactory',
            'assetic.asset_manager.class' => 'Assetic\\Factory\\LazyAssetManager',
            'assetic.asset_manager_cache_warmer.class' => 'Symfony\\Bundle\\AsseticBundle\\CacheWarmer\\AssetManagerCacheWarmer',
            'assetic.cached_formula_loader.class' => 'Assetic\\Factory\\Loader\\CachedFormulaLoader',
            'assetic.config_cache.class' => 'Assetic\\Cache\\ConfigCache',
            'assetic.config_loader.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Loader\\ConfigurationLoader',
            'assetic.config_resource.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Resource\\ConfigurationResource',
            'assetic.coalescing_directory_resource.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Resource\\CoalescingDirectoryResource',
            'assetic.directory_resource.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Resource\\DirectoryResource',
            'assetic.filter_manager.class' => 'Symfony\\Bundle\\AsseticBundle\\FilterManager',
            'assetic.worker.ensure_filter.class' => 'Assetic\\Factory\\Worker\\EnsureFilterWorker',
            'assetic.worker.cache_busting.class' => 'Assetic\\Factory\\Worker\\CacheBustingWorker',
            'assetic.value_supplier.class' => 'Symfony\\Bundle\\AsseticBundle\\DefaultValueSupplier',
            'assetic.node.paths' => array(
            ),
            'assetic.cache_dir' => (__DIR__.'/assetic'),
            'assetic.bundles' => array(
                0 => 'FrameworkBundle',
                1 => 'SecurityBundle',
                2 => 'TwigBundle',
                3 => 'MonologBundle',
                4 => 'SwiftmailerBundle',
                5 => 'AsseticBundle',
                6 => 'DoctrineBundle',
                7 => 'SensioFrameworkExtraBundle',
                8 => 'JMSSerializerBundle',
                9 => 'FOSRestBundle',
                10 => 'NewscoopGimmeBundle',
                11 => 'KnpPaginatorBundle',
                12 => 'KnpMenuBundle',
                13 => 'EWZRecaptchaBundle',
                14 => 'FOSJsRoutingBundle',
                15 => 'BazingaJsTranslationBundle',
                16 => 'FOSOAuthServerBundle',
                17 => 'NelmioApiDocBundle',
                18 => 'NewscoopZendBridgeBundle',
                19 => 'NewscoopNewscoopBundle',
                20 => 'NewscoopCommunityTickerBundle',
                21 => 'NewscoopArticlesBundle',
                22 => 'StofDoctrineExtensionsBundle',
                23 => 'SensioGeneratorBundle',
                24 => 'NewscoopPluginGeneratorBundle',
            ),
            'assetic.twig_extension.class' => 'Symfony\\Bundle\\AsseticBundle\\Twig\\AsseticExtension',
            'assetic.twig_formula_loader.class' => 'Assetic\\Extension\\Twig\\TwigFormulaLoader',
            'assetic.helper.dynamic.class' => 'Symfony\\Bundle\\AsseticBundle\\Templating\\DynamicAsseticHelper',
            'assetic.helper.static.class' => 'Symfony\\Bundle\\AsseticBundle\\Templating\\StaticAsseticHelper',
            'assetic.php_formula_loader.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Loader\\AsseticHelperFormulaLoader',
            'assetic.debug' => false,
            'assetic.use_controller' => false,
            'assetic.enable_profiler' => false,
            'assetic.read_from' => ($this->targetDirs[2].'/application/../web'),
            'assetic.write_to' => ($this->targetDirs[2].'/application/../web'),
            'assetic.variables' => array(
            ),
            'assetic.java.bin' => '/usr/bin/java',
            'assetic.node.bin' => '/usr/bin/node',
            'assetic.ruby.bin' => '/usr/bin/ruby',
            'assetic.sass.bin' => '/usr/bin/sass',
            'assetic.filter.cssrewrite.class' => 'Assetic\\Filter\\CssRewriteFilter',
            'assetic.twig_extension.functions' => array(
            ),
            'doctrine.dbal.logger.chain.class' => 'Doctrine\\DBAL\\Logging\\LoggerChain',
            'doctrine.dbal.logger.profiling.class' => 'Doctrine\\DBAL\\Logging\\DebugStack',
            'doctrine.dbal.logger.class' => 'Symfony\\Bridge\\Doctrine\\Logger\\DbalLogger',
            'doctrine.dbal.configuration.class' => 'Doctrine\\DBAL\\Configuration',
            'doctrine.data_collector.class' => 'Doctrine\\Bundle\\DoctrineBundle\\DataCollector\\DoctrineDataCollector',
            'doctrine.dbal.connection.event_manager.class' => 'Symfony\\Bridge\\Doctrine\\ContainerAwareEventManager',
            'doctrine.dbal.connection_factory.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ConnectionFactory',
            'doctrine.dbal.events.mysql_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\MysqlSessionInit',
            'doctrine.dbal.events.oracle_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\OracleSessionInit',
            'doctrine.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Registry',
            'doctrine.entity_managers' => array(
                'default' => 'doctrine.orm.default_entity_manager',
            ),
            'doctrine.default_entity_manager' => 'default',
            'doctrine.dbal.connection_factory.types' => array(
                'point' => array(
                    'class' => 'Newscoop\\NewscoopBundle\\ORM\\PointType',
                    'commented' => true,
                ),
                'utcdatetime' => array(
                    'class' => 'Newscoop\\NewscoopBundle\\ORM\\UTCDateTimeType',
                    'commented' => true,
                ),
            ),
            'doctrine.connections' => array(
                'default' => 'doctrine.dbal.default_connection',
            ),
            'doctrine.default_connection' => 'default',
            'doctrine.orm.configuration.class' => 'Doctrine\\ORM\\Configuration',
            'doctrine.orm.entity_manager.class' => 'Doctrine\\ORM\\EntityManager',
            'doctrine.orm.manager_configurator.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ManagerConfigurator',
            'doctrine.orm.cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine.orm.cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine.orm.cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine.orm.cache.memcache_host' => 'localhost',
            'doctrine.orm.cache.memcache_port' => 11211,
            'doctrine.orm.cache.memcache_instance.class' => 'Memcache',
            'doctrine.orm.cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine.orm.cache.memcached_host' => 'localhost',
            'doctrine.orm.cache.memcached_port' => 11211,
            'doctrine.orm.cache.memcached_instance.class' => 'Memcached',
            'doctrine.orm.cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine.orm.cache.redis_host' => 'localhost',
            'doctrine.orm.cache.redis_port' => 6379,
            'doctrine.orm.cache.redis_instance.class' => 'Redis',
            'doctrine.orm.cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine.orm.cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine.orm.cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine.orm.metadata.driver_chain.class' => 'Doctrine\\ORM\\Mapping\\Driver\\DriverChain',
            'doctrine.orm.metadata.annotation.class' => 'Doctrine\\ORM\\Mapping\\Driver\\AnnotationDriver',
            'doctrine.orm.metadata.xml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedXmlDriver',
            'doctrine.orm.metadata.yml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedYamlDriver',
            'doctrine.orm.metadata.php.class' => 'Doctrine\\ORM\\Mapping\\Driver\\PHPDriver',
            'doctrine.orm.metadata.staticphp.class' => 'Doctrine\\ORM\\Mapping\\Driver\\StaticPHPDriver',
            'doctrine.orm.proxy_cache_warmer.class' => 'Symfony\\Bridge\\Doctrine\\CacheWarmer\\ProxyCacheWarmer',
            'form.type_guesser.doctrine.class' => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser',
            'doctrine.orm.validator.unique.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator',
            'doctrine.orm.validator_initializer.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\DoctrineInitializer',
            'doctrine.orm.security.user.provider.class' => 'Symfony\\Bridge\\Doctrine\\Security\\User\\EntityUserProvider',
            'doctrine.orm.listeners.resolve_target_entity.class' => 'Doctrine\\ORM\\Tools\\ResolveTargetEntityListener',
            'doctrine.orm.naming_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultNamingStrategy',
            'doctrine.orm.naming_strategy.underscore.class' => 'Doctrine\\ORM\\Mapping\\UnderscoreNamingStrategy',
            'doctrine.orm.auto_generate_proxy_classes' => false,
            'doctrine.orm.proxy_dir' => ($this->targetDirs[2].'/library/Proxy'),
            'doctrine.orm.proxy_namespace' => 'Proxy',
            'sensio_framework_extra.view.guesser.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Templating\\TemplateGuesser',
            'sensio_framework_extra.controller.listener.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ControllerListener',
            'sensio_framework_extra.routing.loader.annot_dir.class' => 'Symfony\\Component\\Routing\\Loader\\AnnotationDirectoryLoader',
            'sensio_framework_extra.routing.loader.annot_file.class' => 'Symfony\\Component\\Routing\\Loader\\AnnotationFileLoader',
            'sensio_framework_extra.routing.loader.annot_class.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Routing\\AnnotatedRouteControllerLoader',
            'sensio_framework_extra.converter.listener.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ParamConverterListener',
            'sensio_framework_extra.converter.manager.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\ParamConverterManager',
            'sensio_framework_extra.converter.doctrine.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\DoctrineParamConverter',
            'sensio_framework_extra.converter.datetime.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\DateTimeParamConverter',
            'jms_serializer.metadata.file_locator.class' => 'Metadata\\Driver\\FileLocator',
            'jms_serializer.metadata.annotation_driver.class' => 'JMS\\Serializer\\Metadata\\Driver\\AnnotationDriver',
            'jms_serializer.metadata.chain_driver.class' => 'Metadata\\Driver\\DriverChain',
            'jms_serializer.metadata.yaml_driver.class' => 'JMS\\Serializer\\Metadata\\Driver\\YamlDriver',
            'jms_serializer.metadata.xml_driver.class' => 'JMS\\Serializer\\Metadata\\Driver\\XmlDriver',
            'jms_serializer.metadata.php_driver.class' => 'JMS\\Serializer\\Metadata\\Driver\\PhpDriver',
            'jms_serializer.metadata.doctrine_type_driver.class' => 'JMS\\Serializer\\Metadata\\Driver\\DoctrineTypeDriver',
            'jms_serializer.metadata.doctrine_phpcr_type_driver.class' => 'JMS\\Serializer\\Metadata\\Driver\\DoctrinePHPCRTypeDriver',
            'jms_serializer.metadata.lazy_loading_driver.class' => 'Metadata\\Driver\\LazyLoadingDriver',
            'jms_serializer.metadata.metadata_factory.class' => 'Metadata\\MetadataFactory',
            'jms_serializer.metadata.cache.file_cache.class' => 'Metadata\\Cache\\FileCache',
            'jms_serializer.event_dispatcher.class' => 'JMS\\Serializer\\EventDispatcher\\LazyEventDispatcher',
            'jms_serializer.camel_case_naming_strategy.class' => 'JMS\\Serializer\\Naming\\CamelCaseNamingStrategy',
            'jms_serializer.serialized_name_annotation_strategy.class' => 'JMS\\Serializer\\Naming\\SerializedNameAnnotationStrategy',
            'jms_serializer.cache_naming_strategy.class' => 'JMS\\Serializer\\Naming\\CacheNamingStrategy',
            'jms_serializer.doctrine_object_constructor.class' => 'JMS\\Serializer\\Construction\\DoctrineObjectConstructor',
            'jms_serializer.unserialize_object_constructor.class' => 'JMS\\Serializer\\Construction\\UnserializeObjectConstructor',
            'jms_serializer.version_exclusion_strategy.class' => 'JMS\\Serializer\\Exclusion\\VersionExclusionStrategy',
            'jms_serializer.serializer.class' => 'JMS\\Serializer\\Serializer',
            'jms_serializer.twig_extension.class' => 'JMS\\Serializer\\Twig\\SerializerExtension',
            'jms_serializer.templating.helper.class' => 'JMS\\SerializerBundle\\Templating\\SerializerHelper',
            'jms_serializer.json_serialization_visitor.class' => 'JMS\\Serializer\\JsonSerializationVisitor',
            'jms_serializer.json_serialization_visitor.options' => 0,
            'jms_serializer.json_deserialization_visitor.class' => 'JMS\\Serializer\\JsonDeserializationVisitor',
            'jms_serializer.xml_serialization_visitor.class' => 'JMS\\Serializer\\XmlSerializationVisitor',
            'jms_serializer.xml_deserialization_visitor.class' => 'JMS\\Serializer\\XmlDeserializationVisitor',
            'jms_serializer.xml_deserialization_visitor.doctype_whitelist' => array(
            ),
            'jms_serializer.yaml_serialization_visitor.class' => 'JMS\\Serializer\\YamlSerializationVisitor',
            'jms_serializer.handler_registry.class' => 'JMS\\Serializer\\Handler\\LazyHandlerRegistry',
            'jms_serializer.datetime_handler.class' => 'JMS\\Serializer\\Handler\\DateHandler',
            'jms_serializer.array_collection_handler.class' => 'JMS\\Serializer\\Handler\\ArrayCollectionHandler',
            'jms_serializer.php_collection_handler.class' => 'JMS\\Serializer\\Handler\\PhpCollectionHandler',
            'jms_serializer.form_error_handler.class' => 'JMS\\Serializer\\Handler\\FormErrorHandler',
            'jms_serializer.constraint_violation_handler.class' => 'JMS\\Serializer\\Handler\\ConstraintViolationHandler',
            'jms_serializer.doctrine_proxy_subscriber.class' => 'JMS\\Serializer\\EventDispatcher\\Subscriber\\DoctrineProxySubscriber',
            'jms_serializer.stopwatch_subscriber.class' => 'JMS\\SerializerBundle\\Serializer\\StopwatchEventSubscriber',
            'jms_serializer.infer_types_from_doctrine_metadata' => true,
            'fos_rest.serializer.exclusion_strategy.version' => '',
            'fos_rest.serializer.exclusion_strategy.groups' => '',
            'fos_rest.view_handler.jsonp.callback_param' => '',
            'fos_rest.view_handler.jsonp.callback_filter' => '',
            'fos_rest.routing.loader.controller.class' => 'FOS\\RestBundle\\Routing\\Loader\\RestRouteLoader',
            'fos_rest.routing.loader.yaml_collection.class' => 'FOS\\RestBundle\\Routing\\Loader\\RestYamlCollectionLoader',
            'fos_rest.routing.loader.xml_collection.class' => 'FOS\\RestBundle\\Routing\\Loader\\RestXmlCollectionLoader',
            'fos_rest.routing.loader.processor.class' => 'FOS\\RestBundle\\Routing\\Loader\\RestRouteProcessor',
            'fos_rest.routing.loader.reader.controller.class' => 'FOS\\RestBundle\\Routing\\Loader\\Reader\\RestControllerReader',
            'fos_rest.routing.loader.reader.action.class' => 'FOS\\RestBundle\\Routing\\Loader\\Reader\\RestActionReader',
            'fos_rest.format_negotiator.class' => 'FOS\\RestBundle\\Util\\FormatNegotiator',
            'fos_rest.inflector.class' => 'FOS\\RestBundle\\Util\\Inflector\\DoctrineInflector',
            'fos_rest.request.param_fetcher.class' => 'FOS\\RestBundle\\Request\\ParamFetcher',
            'fos_rest.request.param_fetcher.reader.class' => 'FOS\\RestBundle\\Request\\ParamReader',
            'fos_rest.cache_dir' => (__DIR__.'/fos_rest'),
            'fos_rest.serializer.serialize_null' => false,
            'fos_rest.formats' => array(
                'json' => false,
                'html' => true,
            ),
            'fos_rest.default_engine' => 'twig',
            'fos_rest.force_redirects' => array(
                'html' => 302,
            ),
            'fos_rest.failed_validation' => 400,
            'fos_rest.empty_content' => 204,
            'fos_rest.serialize_null' => false,
            'fos_rest.view_response_listener.force_view' => false,
            'fos_rest.routing.loader.default_format' => NULL,
            'fos_rest.routing.loader.include_format' => true,
            'fos_rest.exception.codes' => array(
                'Newscoop\\Exception\\ResourcesConflictException' => 409,
                'Newscoop\\Exception\\InvalidParametersException' => 422,
                'Newscoop\\Exception\\ResourceIsEmptyException' => 200,
                'Symfony\\Component\\Routing\\Exception\\ResourceNotFoundException' => 404,
                'Doctrine\\ORM\\EntityNotFoundException' => 404,
                'Symfony\\Component\\Form\\Exception\\InvalidArgumentException' => 500,
                'Symfony\\Component\\HttpKernel\\Exception\\FlattenException' => 404,
                'Symfony\\Component\\Routing\\Exception\\MethodNotAllowedException' => 404,
                'Newscoop\\Exception\\ResourceNotModifiedException' => 304,
                'Newscoop\\NewscoopException' => 500,
                'OAuth2\\OAuth2AuthenticateException' => 401,
                'Newscoop\\Exception\\AuthenticationException' => 401,
            ),
            'fos_rest.exception.messages' => array(
                'Newscoop\\Exception\\ResourcesConflictException' => true,
                'Newscoop\\Exception\\InvalidParametersException' => true,
                'Newscoop\\Exception\\ResourceIsEmptyException' => true,
                'Symfony\\Component\\Routing\\Exception\\ResourceNotFoundException' => true,
                'Doctrine\\ORM\\EntityNotFoundException' => true,
                'Symfony\\Component\\Form\\Exception\\InvalidArgumentException' => true,
                'Symfony\\Component\\Routing\\Exception\\MethodNotAllowedException' => true,
                'Symfony\\Component\\HttpKernel\\Exception\\FlattenException' => true,
                'Newscoop\\Exception\\ResourceNotModifiedException' => false,
                'OAuth2\\OAuth2AuthenticateException' => true,
                'Newscoop\\NewscoopException' => true,
                'Newscoop\\Exception\\AuthenticationException' => true,
            ),
            'fos_rest.decoders' => array(
                'json' => 'fos_rest.decoder.json',
            ),
            'fos_rest.default_priorities' => array(
                0 => 'json',
                1 => 'html',
            ),
            'fos_rest.prefer_extension' => true,
            'fos_rest.fallback_format' => 'json',
            'fos_rest.mime_types' => array(
                'json' => array(
                    0 => 'application/json',
                    1 => 'application/x-json',
                    2 => 'application/vnd.sourcefabric-org.newscoop+json',
                ),
            ),
            'fos_rest.allowed_methods_listener.class' => 'FOS\\RestBundle\\EventListener\\AllowedMethodsListener',
            'fos_rest.allowed_methods_loader.class' => 'FOS\\RestBundle\\Response\\AllowedMethodsLoader\\AllowedMethodsRouterLoader',
            'fos_rest.converter.request_body.validation_errors_argument' => 'validationErrors',
            'newscoop.gimme.allow_origin' => array(
                0 => '*',
            ),
            'knp_paginator.class' => 'Knp\\Component\\Pager\\Paginator',
            'knp_paginator.templating.helper.pagination.class' => 'Knp\\Bundle\\PaginatorBundle\\Templating\\PaginationHelper',
            'knp_paginator.helper.processor.class' => 'Knp\\Bundle\\PaginatorBundle\\Helper\\Processor',
            'knp_paginator.template.pagination' => 'KnpPaginatorBundle:Pagination:sliding.html.twig',
            'knp_paginator.template.filtration' => 'KnpPaginatorBundle:Pagination:filtration.html.twig',
            'knp_paginator.template.sortable' => 'KnpPaginatorBundle:Pagination:sortable_link.html.twig',
            'knp_paginator.page_range' => 5,
            'knp_menu.factory.class' => 'Knp\\Menu\\MenuFactory',
            'knp_menu.factory_extension.routing.class' => 'Knp\\Menu\\Integration\\Symfony\\RoutingExtension',
            'knp_menu.helper.class' => 'Knp\\Menu\\Twig\\Helper',
            'knp_menu.matcher.class' => 'Knp\\Menu\\Matcher\\Matcher',
            'knp_menu.menu_provider.chain.class' => 'Knp\\Menu\\Provider\\ChainProvider',
            'knp_menu.menu_provider.container_aware.class' => 'Knp\\Bundle\\MenuBundle\\Provider\\ContainerAwareProvider',
            'knp_menu.menu_provider.builder_alias.class' => 'Knp\\Bundle\\MenuBundle\\Provider\\BuilderAliasProvider',
            'knp_menu.renderer_provider.class' => 'Knp\\Bundle\\MenuBundle\\Renderer\\ContainerAwareProvider',
            'knp_menu.renderer.list.class' => 'Knp\\Menu\\Renderer\\ListRenderer',
            'knp_menu.renderer.list.options' => array(
            ),
            'knp_menu.listener.voters.class' => 'Knp\\Bundle\\MenuBundle\\EventListener\\VoterInitializerListener',
            'knp_menu.voter.router.class' => 'Knp\\Menu\\Matcher\\Voter\\RouteVoter',
            'knp_menu.twig.extension.class' => 'Knp\\Menu\\Twig\\MenuExtension',
            'knp_menu.renderer.twig.class' => 'Knp\\Menu\\Renderer\\TwigRenderer',
            'knp_menu.renderer.twig.options' => array(
            ),
            'knp_menu.renderer.twig.template' => 'knp_menu.html.twig',
            'knp_menu.default_renderer' => 'twig',
            'ewz_recaptcha.form.type.class' => 'Newscoop\\NewscoopBundle\\Form\\Type\\RecaptchaType',
            'ewz_recaptcha.validator.true.class' => 'EWZ\\Bundle\\RecaptchaBundle\\Validator\\Constraints\\TrueValidator',
            'ewz_recaptcha.public_key' => NULL,
            'ewz_recaptcha.private_key' => NULL,
            'ewz_recaptcha.enabled' => true,
            'ewz_recaptcha.locale_key' => 'kernel.default_locale',
            'ewz_recaptcha.secure' => false,
            'fos_js_routing.extractor.class' => 'FOS\\JsRoutingBundle\\Extractor\\ExposedRoutesExtractor',
            'fos_js_routing.controller.class' => 'FOS\\JsRoutingBundle\\Controller\\Controller',
            'fos_js_routing.cache_control' => array(
                'enabled' => false,
            ),
            'bazinga.jstranslation.translation_finder.class' => 'Bazinga\\Bundle\\JsTranslationBundle\\Finder\\TranslationFinder',
            'bazinga.jstranslation.translation_dumper.class' => 'Bazinga\\Bundle\\JsTranslationBundle\\Dumper\\TranslationDumper',
            'bazinga.jstranslation.controller.class' => 'Bazinga\\Bundle\\JsTranslationBundle\\Controller\\Controller',
            'fos_oauth_server.server.class' => 'OAuth2\\OAuth2',
            'fos_oauth_server.security.authentication.provider.class' => 'FOS\\OAuthServerBundle\\Security\\Authentication\\Provider\\OAuthProvider',
            'fos_oauth_server.security.authentication.listener.class' => 'FOS\\OAuthServerBundle\\Security\\Firewall\\OAuthListener',
            'fos_oauth_server.security.entry_point.class' => 'FOS\\OAuthServerBundle\\Security\\EntryPoint\\OAuthEntryPoint',
            'fos_oauth_server.server.options' => array(
                'supported_scopes' => 'standard_access',
            ),
            'fos_oauth_server.model_manager_name' => NULL,
            'fos_oauth_server.model.client.class' => 'Newscoop\\GimmeBundle\\Entity\\Client',
            'fos_oauth_server.model.access_token.class' => 'Newscoop\\GimmeBundle\\Entity\\AccessToken',
            'fos_oauth_server.model.refresh_token.class' => 'Newscoop\\GimmeBundle\\Entity\\RefreshToken',
            'fos_oauth_server.model.auth_code.class' => 'Newscoop\\GimmeBundle\\Entity\\AuthCode',
            'fos_oauth_server.template.engine' => 'twig',
            'fos_oauth_server.authorize.form.type' => 'fos_oauth_server_authorize',
            'fos_oauth_server.authorize.form.name' => 'fos_oauth_server_authorize_form',
            'fos_oauth_server.authorize.form.validation_groups' => array(
                0 => 'Authorize',
                1 => 'Default',
            ),
            'nelmio_api_doc.motd.template' => 'NelmioApiDocBundle::Components/motd.html.twig',
            'nelmio_api_doc.exclude_sections' => array(
            ),
            'nelmio_api_doc.default_sections_opened' => true,
            'nelmio_api_doc.api_name' => 'Newscoop REST API documentation',
            'nelmio_api_doc.sandbox.enabled' => true,
            'nelmio_api_doc.sandbox.endpoint' => NULL,
            'nelmio_api_doc.sandbox.accept_type' => NULL,
            'nelmio_api_doc.sandbox.body_format.formats' => array(
                0 => 'form',
                1 => 'json',
            ),
            'nelmio_api_doc.sandbox.body_format.default_format' => 'form',
            'nelmio_api_doc.sandbox.request_format.method' => 'format_param',
            'nelmio_api_doc.sandbox.request_format.default_format' => 'json',
            'nelmio_api_doc.sandbox.request_format.formats' => array(
                'json' => 'application/json',
                'xml' => 'application/xml',
            ),
            'nelmio_api_doc.formatter.abstract_formatter.class' => 'Nelmio\\ApiDocBundle\\Formatter\\AbstractFormatter',
            'nelmio_api_doc.formatter.markdown_formatter.class' => 'Nelmio\\ApiDocBundle\\Formatter\\MarkdownFormatter',
            'nelmio_api_doc.formatter.simple_formatter.class' => 'Nelmio\\ApiDocBundle\\Formatter\\SimpleFormatter',
            'nelmio_api_doc.formatter.html_formatter.class' => 'Nelmio\\ApiDocBundle\\Formatter\\HtmlFormatter',
            'nelmio_api_doc.formatter.swagger_formatter.class' => 'Nelmio\\ApiDocBundle\\Formatter\\SwaggerFormatter',
            'nelmio_api_doc.sandbox.authentication' => NULL,
            'nelmio_api_doc.extractor.api_doc_extractor.class' => 'Nelmio\\ApiDocBundle\\Extractor\\ApiDocExtractor',
            'nelmio_api_doc.form.extension.description_form_type_extension.class' => 'Nelmio\\ApiDocBundle\\Form\\Extension\\DescriptionFormTypeExtension',
            'nelmio_api_doc.twig.extension.extra_markdown.class' => 'Nelmio\\ApiDocBundle\\Twig\\Extension\\MarkdownExtension',
            'nelmio_api_doc.doc_comment_extractor.class' => 'Nelmio\\ApiDocBundle\\Util\\DocCommentExtractor',
            'nelmio_api_doc.extractor.handler.fos_rest.class' => 'Nelmio\\ApiDocBundle\\Extractor\\Handler\\FosRestHandler',
            'nelmio_api_doc.extractor.handler.jms_security.class' => 'Nelmio\\ApiDocBundle\\Extractor\\Handler\\JmsSecurityExtraHandler',
            'nelmio_api_doc.extractor.handler.sensio_framework_extra.class' => 'Nelmio\\ApiDocBundle\\Extractor\\Handler\\SensioFrameworkExtraHandler',
            'nelmio_api_doc.extractor.handler.phpdoc.class' => 'Nelmio\\ApiDocBundle\\Extractor\\Handler\\PhpDocHandler',
            'nelmio_api_doc.parser.collection_parser.class' => 'Nelmio\\ApiDocBundle\\Parser\\CollectionParser',
            'nelmio_api_doc.parser.form_errors_parser.class' => 'Nelmio\\ApiDocBundle\\Parser\\FormErrorsParser',
            'nelmio_api_doc.swagger.base_path' => '/api',
            'nelmio_api_doc.swagger.swagger_version' => '1.2',
            'nelmio_api_doc.swagger.api_version' => '0.1',
            'nelmio_api_doc.swagger.info' => array(
                'title' => 'Symfony2',
                'description' => 'My awesome Symfony2 app!',
                'TermsOfServiceUrl' => NULL,
                'contact' => NULL,
                'license' => NULL,
                'licenseUrl' => NULL,
            ),
            'nelmio_api_doc.swagger.model_naming_strategy' => 'dot_notation',
            'smarty.extension.routing.class' => 'Newscoop\\NewscoopBundle\\Extension\\RoutingExtension',
            'smarty.extension.assetic.dynamic.class' => 'Newscoop\\NewscoopBundle\\Extension\\DynamicAsseticExtension',
            'smarty.extension.assetic.static.class' => 'Newscoop\\NewscoopBundle\\Extension\\StaticAsseticExtension',
            'newscoop_newscoop.security.authentication.success_handler.class' => 'Newscoop\\NewscoopBundle\\Security\\Http\\Authentication\\AuthenticationSuccessHandler',
            'newscoop_newscoop.security.authentication.frontend.success_handler.class' => 'Newscoop\\NewscoopBundle\\Security\\Http\\Authentication\\AuthenticationFrontendSuccessHandler',
            'newscoop_newscoop.security.logout.success_handler.class' => 'Newscoop\\NewscoopBundle\\Security\\Http\\Authentication\\LogoutSuccessHandler',
            'newscoop_newscoop.security.frontend.logout.success_handler.class' => 'Newscoop\\NewscoopBundle\\Security\\Http\\Authentication\\FrontendLogoutSuccessHandler',
            'newscoop_newscoop.menu_builder.class' => 'Newscoop\\NewscoopBundle\\Menu\\Builder',
            'newscoop_newscoop.session.storage.class' => 'Newscoop\\NewscoopBundle\\Session\\Storage',
            'newscoop_newscoop.security.oauth.success_handler.class' => 'Newscoop\\NewscoopBundle\\Security\\Http\\Authentication\\OAuthSuccessHandler',
            'newscoop_newscoop.security.oauth.logout.success_handler.class' => 'Newscoop\\NewscoopBundle\\Security\\Http\\Authentication\\OAuthLogoutSuccessHandler',
            'stof_doctrine_extensions.event_listener.locale.class' => 'Stof\\DoctrineExtensionsBundle\\EventListener\\LocaleListener',
            'stof_doctrine_extensions.event_listener.logger.class' => 'Stof\\DoctrineExtensionsBundle\\EventListener\\LoggerListener',
            'stof_doctrine_extensions.event_listener.blame.class' => 'Stof\\DoctrineExtensionsBundle\\EventListener\\BlameListener',
            'stof_doctrine_extensions.uploadable.manager.class' => 'Stof\\DoctrineExtensionsBundle\\Uploadable\\UploadableManager',
            'stof_doctrine_extensions.uploadable.mime_type_guesser.class' => 'Stof\\DoctrineExtensionsBundle\\Uploadable\\MimeTypeGuesserAdapter',
            'stof_doctrine_extensions.uploadable.default_file_info.class' => 'Stof\\DoctrineExtensionsBundle\\Uploadable\\UploadedFileInfo',
            'stof_doctrine_extensions.default_locale' => 'en_US',
            'stof_doctrine_extensions.default_file_path' => NULL,
            'stof_doctrine_extensions.translation_fallback' => false,
            'stof_doctrine_extensions.persist_default_translation' => false,
            'stof_doctrine_extensions.skip_translation_on_load' => false,
            'stof_doctrine_extensions.uploadable.validate_writable_directory' => true,
            'stof_doctrine_extensions.listener.translatable.class' => 'Gedmo\\Translatable\\TranslatableListener',
            'stof_doctrine_extensions.listener.timestampable.class' => 'Gedmo\\Timestampable\\TimestampableListener',
            'stof_doctrine_extensions.listener.blameable.class' => 'Gedmo\\Blameable\\BlameableListener',
            'stof_doctrine_extensions.listener.sluggable.class' => 'Gedmo\\Sluggable\\SluggableListener',
            'stof_doctrine_extensions.listener.tree.class' => 'Gedmo\\Tree\\TreeListener',
            'stof_doctrine_extensions.listener.loggable.class' => 'Gedmo\\Loggable\\LoggableListener',
            'stof_doctrine_extensions.listener.sortable.class' => 'Gedmo\\Sortable\\SortableListener',
            'stof_doctrine_extensions.listener.softdeleteable.class' => 'Gedmo\\SoftDeleteable\\SoftDeleteableListener',
            'stof_doctrine_extensions.listener.uploadable.class' => 'Gedmo\\Uploadable\\UploadableListener',
            'stof_doctrine_extensions.listener.reference_integrity.class' => 'Gedmo\\ReferenceIntegrity\\ReferenceIntegrityListener',
            'console.command.ids' => array(
            ),
            'nelmio_api_doc.parser.form_type_parser.class' => 'Nelmio\\ApiDocBundle\\Parser\\FormTypeParser',
            'nelmio_api_doc.parser.validation_parser.class' => 'Nelmio\\ApiDocBundle\\Parser\\ValidationParser',
            'nelmio_api_doc.parser.jms_metadata_parser.class' => 'Nelmio\\ApiDocBundle\\Parser\\JmsMetadataParser',
        );
    }
}
