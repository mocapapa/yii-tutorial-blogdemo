DROP TABLE IF EXISTS User;
CREATE TABLE User
(
	id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
	username VARCHAR(128) NOT NULL,
	password VARCHAR(128) NOT NULL,
	email VARCHAR(128) NOT NULL,
	profile TEXT
);

DROP TABLE IF EXISTS Post;
CREATE TABLE Post
(
	id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
	title VARCHAR(128) NOT NULL,
	content TEXT NOT NULL,
	contentDisplay TEXT,
	status INTEGER NOT NULL,
	createTime INTEGER,
	updateTime INTEGER,
	authorId INTEGER NOT NULL,
	CONSTRAINT FK_post_author FOREIGN KEY (authorId)
		REFERENCES User (id) ON DELETE CASCADE ON UPDATE RESTRICT
);


INSERT INTO "User" VALUES(1,'demo','fe01ce2a7fbac8fafaed7c982a04e229','webmaster@example.com',NULL);
INSERT INTO "Post" VALUES(1,'Welcome to Yii Blog','This blog system is developed using Yii. It is meant to demonstrate how to use Yii to build a complete real-world application. Complete source code may be found in the Yii releases.

Feel free to try this system by writing new posts and posting comments.

If you are interested in enhancing this demo, you may refer to the [yii-blogdemo-enhanced](http://code.google.com/p/yii-blogdemo-enhanced/) project which adds many portlets and features.','<p>This blog system is developed using Yii. It is meant to demonstrate how to use Yii to build a complete real-world application. Complete source code may be found in the Yii releases.</p>

<p>Feel free to try this system by writing new posts and posting comments.</p>

<p>If you are interested in enhancing this demo, you may refer to the <a href="http://code.google.com/p/yii-blogdemo-enhanced/">yii-blogdemo-enhanced</a> project which adds many portlets and features.</p>
',1,1230952187,1235755086,1);
