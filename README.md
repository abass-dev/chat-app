# Chat App
This ChatApp/web application is proposed to beginners in order to learn the back-end and front-end before moving on to a framework or a library.
# Projet statut
<h4>Still in development</h4>

# Required tools

1.PHP, MySQL<br />
2.Composer<br />
3.NodeJs<br />
4.Sass<br />

# Basic Usage
2.Clone the project: <kbd>git clone https://github.com/abass-bencheik/chat-app.git</kbd><br />
2.<kbd>cd chat-app</kbd><br />
1.<kbd>composer update</kbd><br >
2.<kbd>yarn start-sass</kbd> to run/compile Sass folders
1.<kbd>yarn start-server</kbd> to run php local server, then open the flowing address <a href="http://localhost:8000">http://localhost:8000</a><br />
5.<h3>Database configuration</h3><br />
<p>Config the database into... <strong>src/Config/DB.php</strong> class<br />
<strong>Example of configuration:</strong>
<code> 
<?php

/**
 * Please note: 
    * This class was generated the first time you open this application in your web browser.
    * And this file is not a commit file, which means that it is not available on our git repository!
    * To work with this application, you must first set up your local database information in this class.
    * Example:
    * in the constructor of the parent class
    * parent::__construct("db_username", "db_name", "db_password") ;
    * If your database information is correct, you are done!
    * You can start the php development server by typing ... yarn start-server and yarn start-sass to compile the sass folders
    * Test:
    * For testing, simply open the following address in your web browser http://localhost:8000
    */
namespace App\Config;
use App\Config\DBConfig;


/**
 * Config your database information in constructor of the parent class
 */
class DB extends DBConfig
{
  public  function __construct()
  {
    parent::__construct("db_username", "db_name", "db_password");
    
  }
  
}
?>
</code>
</p>


# Installation and contribution
