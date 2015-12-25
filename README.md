# SOCIAL_MEDIA_WEBSITE
This is a project that was conducted based on the social media website explored in 
Robin's Nixon book "Learning PHP, MySQL &amp; JavaScript With jQuery, CSS & HTML5". 
This project was conducted for the sole purpose of expanding knowledge in the web development field,
and pushing the boundaries of what we have learned so far in PHP, mySQL, Jquery, Javascript, html and CSS.


To create the approriate database for the website, please enter the following commands (using mySQL manager in phpmyAdmin or any method you prefer):

```mysql
create Table members (
              user VARCHAR(16),
              pass VARCHAR(60),
              INDEX(user(6)));

  create Table messages (
              id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
              auth VARCHAR(16),
              recip VARCHAR(16),
              pm CHAR(1),
              time INT UNSIGNED,
              message VARCHAR(4096),
              INDEX(auth(6)),
              INDEX(recip(6)));

  create Table friends (
              user VARCHAR(16),
              friend VARCHAR(16),
              INDEX(user(6)),
              INDEX(friend(6)) );

  create Table profiles (
              user VARCHAR(16),
              text VARCHAR(4096),
              INDEX(user(6)) );
```
