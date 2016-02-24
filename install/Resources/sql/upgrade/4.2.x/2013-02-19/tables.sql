DROP INDEX IdUser ON Subscriptions;
CREATE TABLE SubscriptionArticle (id INT AUTO_INCREMENT NOT NULL, article_number INT NOT NULL, language_id INT DEFAULT NULL, StartDate DATE NOT NULL, Days INT NOT NULL, PaidDays INT NOT NULL, NoticeSent VARCHAR(255) NOT NULL, IdSubscription INT DEFAULT NULL, INDEX IDX_DBC6BEEA303CB8FA (IdSubscription), INDEX IDX_DBC6BEEAFC5788D482F1BAF4 (article_number, language_id), INDEX IDX_DBC6BEEA82F1BAF4 (language_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB;
CREATE TABLE SubscriptionIssue (id INT AUTO_INCREMENT NOT NULL, issue_number INT NOT NULL, language_id INT DEFAULT NULL, StartDate DATE NOT NULL, Days INT NOT NULL, PaidDays INT NOT NULL, NoticeSent VARCHAR(255) NOT NULL, IdSubscription INT DEFAULT NULL, INDEX IDX_DBC6BGGA303CB8FA (IdSubscription), INDEX IDX_DBC6BGGAFC5788D482F1BAF4 (issue_number, language_id), INDEX IDX_DBC6BGGA82F1BAF4 (language_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB;