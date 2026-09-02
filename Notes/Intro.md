# PHP

- PHP is a popular general-purpose scripting language that is especially suited to web development. It was originally created by Danish-Canadian programmer `Rasmus Lerdorf` in 1994. The PHP reference implementation is now produced by The PHP Group.
- PHP stands for personal home page, but it now stands for the recursive initialism PHP: Hypertext Preprocessor.
- Php is a server-side scripting language that is works on the web server. it is used to develop the dynamic and static web pages. it just takes the http request from the client through web browser and sends the response back to the client. it also sends sql query to the database and fetches the data from the database and sends it back to the server and then to the client. it is an open source language and it is free to use. it is very popular and widely used languages in the world. It is very easy to learn and understand. it is very powerful language and it is used by many big companies like facebook, google, yahoo, wikipidida, etc. 
- so we need html and xampp server to run php code . we can run php code in any web browser like google chrome, mozilla firefox. the xampp server is used to run the php code in the local machine 
- so our program will execute on the xampp server and the output will be displayed on the web browser.
- for installation of php we need firstly install the xampp server in our local machine. after installation of the xampp server we need to satrt the apache server and mysql server from the xampp control pannel. 
- after starting the apache server and the mysql server we need to create a folder in the htdocs folder of the xampp server. and that folder will used to store the php files so we will open that folder in the vs code and write the php code with .php extension 
- and we also open the chrome and type localhost/foldername/filename.php
- we can install the liverserver extension in the vs code as well as on charome and we can run the php code on the live server as well where we just have to open the extension in the chrome and write the localhost/foldername in the actual server address and the vs code port number address will go to the liver server address and then after restating our code will reload autometically  

---

## Run the any php file in browser

# PHP Quick Setup Notes

1. Install XAMPP.

2. Add PHP to Environment Variables:
   - Search **Environment Variables** in Windows.
   - Open **Edit the system environment variables**.
   - Click **Environment Variables**.
   - Select **Path** → **Edit** → **New**.
   - Add:

   ```text
   C:\xampp\php
   ```
   ## very important  

   - Click **OK** and restart VS Code.

3. Verify PHP installation:

   ```bash
   php -v
   ```

4. Install the **PHP Server** extension in VS Code.

5. Open your PHP project folder in VS Code.

6. Create a PHP file:

   ```php
   <?php
   echo "Hello World";
   ?>
   ```

7. Right-click the file and select:

   ```text
   PHP Server: Serve Project
   ```

8. The browser will open automatically and the current PHP file will run.

**Result:** Now you can create a new `.php` file and run it directly from VS Code in the browser without manually starting XAMPP every time.

---

## alway run this url in the chrome

http://localhost/PHP/filename.php
