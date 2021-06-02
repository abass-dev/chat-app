# Chat App
This ChatApp/web application is proposed for beginners in order to learn the back-end and front-end before moving on to a framework or a library.
# Projet status
<h4>Still in development</h4>
<h4>Maintainer <a href="https://m.facebook.com/abasscheik.ben">Abass Ben Cheik</a></h4>

# Required tools

1. PHP, MySQL<br />
2. Composer<br />
3. NodeJs<br />
4. Sass<br />

# Basic Usage
<p>
1. Clone the project: <kbd>git clone https://github.com/abass-bencheik/chat-app.git</kbd><br />
2. <kbd>cd chat-app</kbd><br />
3. <kbd>composer update</kbd><br >
4. <kbd>yarn start-sass</kbd> to run/compile Sass folders
5. <kbd>yarn start-server</kbd> to run php local server, then open the flowing address <a href="http://localhost:8000">http://localhost:8000</a><br />
6. <h3>Database configuration</h3><br />
</p>
<p>Copy the below database snippet into... <strong>src/Config/DB.php</strong> class<br />
<strong>Example of satabase configuration:</strong><br />

namespace App\Config;<br />
use App\Config\DBConfig;<br />

class DB extends DBConfig<br />
{
  public  function __construct()<br />
  {
    parent::__construct("db_username", "db_name", "db_password");<br />
    
 }
}
</p>


# Become a contributor ?
<p>It's simple, just fork the project and propose us your changes.
Thanks in advance 😊
</p>
