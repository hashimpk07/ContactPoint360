
## ContactPoint 360
<ul>
    <li>Project Created By  : HASHIM PK  </li>
    <li>Project Created 0n  : 18/07/2025 to 18/07/2025 </li>
    <li>Project Duration    : 6 to 7 hours  </li>
    <li>Project Created for : ContactPoint 360   </li>
    <li>Using Technology    : Laravel 12.20.0 , Mysql ,Ajax, Jquery ,From builder And Boostrap 4   </li>
</ul>
<h2 style="font-weight: bold";>About C360 (or) Contact Point 3690  </h2>
<p>ContactPoint 360, Inc. is a global organization offering Software Development, onshore & nearshore contact center solutions. We’re proud to call ourselves innovative leaders in the industry and value how we’ve been able to grow significantly. We offer custom software development and co-development services for clients who need personalized solutions to complex workflow problems. Our team of developers and subject matter experts work to understand your unique needs and goals to deliver tailored solutions which are agile, responsive and provide superior user experience. We are proud to announce that we are certified as a Great Place to Work after a thorough and independent analysis conducted by Great Place to Work Institute Canada. We offer</p>
<h2 style="font-weight: bold";>About Application</h2>
<p>The purpose of this interview task is to develop an application that utilizes dynamic forms in Laravel.</p>
<ul>
    <li>Admin Login </li>
    <li>Admin dashboard</li>
    <li>Design a program that allows admins to create and save dynamic forms. The program should allow admins to add HTML fields that are displayed in the table. Additionally, admins should have privileges to add, edit, and delete controls within the form </li>
    <li>The created form should be visible to the public and allow data submission.</li>
</ul>

<h2 style="font-weight: bold";>About Laravel</h2>
<p>Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:
</p>
<p>Simple, fast routing engine.
Powerful dependency injection container.
Multiple back-ends for session and cache storage.
Expressive, intuitive database ORM.
Database agnostic schema migrations.
Robust background job processing.
Real-time event broadcasting.</p>
<p>Laravel is accessible, powerful, and provides tools required for large, robust applications</p>

<h2 style="color:red">Laravel 10 Requirements</h2>
<p>PHP >= 8.1 </p>
<p>BCMath PHP Extension Ctype PHP Extension Fileinfo PHP extension JSON PHP Extension Mbstring PHP Extension OpenSSL PHP Extension PDO PHP Extension Tokenizer PHP Extension XML PHP Extension.

This software is used by product details and display.This software is user for <span style="color : green">ContactPoint 360</span>  Machine Test Purpose Make Sure you have Xampp,Largon or Wams Server if using windows OS and LAMS if using Linux Make Sure Above PHP 8.2 </p>

 <h2> Installation & Setup</h2>

  <h3>Step 1: Clone the Repository</h3>
  <pre><code>git clone https://github.com/hashimpk07/contactpoint360.git
cd contactpoint360</code></pre>

  <h3>Step 2: Create the .env File</h3>
  <pre><code>cp .env.example .env</code></pre>

  <h3>Step 3: Configure Database in .env</h3>
  <pre><code>DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=contact360
DB_USERNAME=root
DB_PASSWORD=</code></pre>

  <h3>Step 4: Install Composer Dependencies</h3>
  <pre><code>composer update</code></pre>

  <h3>Step 5: Verify <code>vendor/</code> Directory</h3>
  <p>If not available, run:</p>
  <pre><code>composer install</code></pre>

  <h2> Project Initialization</h2>

  <h3>Step 6: Run Migrations</h3>
  <pre><code>php artisan migrate</code></pre>

  <h3>Step 7: Serve the Application</h3>
  <pre><code>php artisan serve</code></pre>
  <p>Open in browser: <code>http://127.0.0.1:8000</code></p>

  <h2> User Access</h2>

  <h3>Step 8: Register & Login</h3>
  <p>Create a new user and log in to the dashboard.</p>

  <h2> Mail & Queue Setup</h2>

  <h3>Step 9: Mail Configuration</h3>
  <pre><code>MAIL_MAILER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=your_username
MAIL_PASSWORD=your_password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=admin@example.com
MAIL_FROM_NAME="ContactPoint360"</code></pre>

  <h3>Step 10: Enable Queues</h3>
  <pre><code>QUEUE_CONNECTION=database</code></pre>
  <pre><code>php artisan queue:work</code></pre>

  <h2> Access URLs</h2>
  <ul>
    <li><strong>Admin Login:</strong> <a href="http://127.0.0.1:8000/login">http://127.0.0.1:8000/login</a></li>
    <li><strong>User Form:</strong> <a href="http://127.0.0.1:8000/user">http://127.0.0.1:8000/user</a></li>
  </ul>

 
