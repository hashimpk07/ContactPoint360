
 <h2>🛠 Installation & Setup</h2>

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

 
