# SOCIAL_MEDIA_WEBSITE
This is a project that was conducted based on the social media website explored in 
Robin's Nixon book "Learning PHP, MySQL &amp; JavaScript With jQuery, CSS & HTML5". 
This project was conducted for the sole purpose of expanding knowledge in the web development field,
and pushing the boundaries of what we have learned so far in PHP, mySQL, Jquery, Javascript, html and CSS.

This project was done in collaboration with Jad Haidar, a well respected fellow developer who focused mainly on the css part of this project .

To create the approriate database for the website, please enter the following commands (using mySQL manager in phpmyAdmin or any method you prefer):

```sql
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
License

The MIT License (MIT)
Copyright (c) 2015 Abed Zantout

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
