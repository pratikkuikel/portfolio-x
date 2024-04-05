---
title: "Setting up Laravel development environment in windows"
description: "Learn the essential prerequisites and installation steps for Laravel development on Windows. This comprehensive guide covers setting up PHP, Laragon, Composer, database, git bash and visual studio code to kickstart your Laravel projects."
pubDate: "Oct 21 2023"
heroImage: "getting-started-with-laravel.png"
---

Welcome aboard, fellow artisan, to the world of Laravel! \
In this installment of our journey into Laravel, we will delve into the process of configuring a Windows environment for Laravel development. So, let's get you through the 
steps necessary to prepare Laravel for takeoff, and together, we shall initiate this adventure.

Let's dive straight into installing these tools.

1. [Installing Laragon](#installing-laragon)
2. [Installing Composer](#installing-composer)
3. [Installing Visual Studio Code](#installing-visual-studio-code)
4. [Installing Git Bash](#installing-git-bash)
5. [Installing Node-js](#installing-node-js)
6. [Installing Visual Studio Code Extensions For Laravel](#installing-visual-studio-code-extensions-for-laravel)

## [Installing Laragon](#installing-laragon)

- To install laragon visit the laragon website download page and download the
  [ LARAGON FULL EDITION ](https://laragon.org/download).
- Run the downloaded file, select the language for installation, confirm the installation folder for the laragon.
- You can enable or disable auto start, auto detection, and auto creation of virtual hosts based on your preferences. Alternatively, you have the option to enable all of them for your convenience.
- And finally click on Install.

With Laragon successfully installed on our machine and the latest PHP version readily available, it's time to proceed with Composer installation.

## [Installing Composer](#installing-composer)

- Download the composer setup file, [Composer-setup.exe](https://getcomposer.org/download).
- Run the downloaded file, select _Install for all users_ recommended.
- Don't bother with Developer mode, just click next.
- The exciting moment has arrived! In the Composer setup, click "Browse" to choose the command-line PHP. Navigate to the Laragon installation folder, go to "bin," access the "php" folder, dive into the "php-x.x.x-win32-vs16-x64" folder, and select the "php.exe" file.
  > If you have followed the laragon installation steps carefully the PHP path should look something like C:\laragon\bin\php\php-8.2.3-Win32-vs16-x64\php.exe
- Click "Next" and skip the proxy setup. Then, hit "Next" once more, and finally, click the "Install" button to start running Composer on your Windows device with the latest PHP version.

## [Installing Visual Studio Code](#installing-visual-studio-code)

- Download visual studio code by clicking the "Download for windows" button  [⬇️ vscode for windows](https://code.visualstudio.com/download)
- Run the downloaded file.
- Agree to the terms like a responsible user,"Next".
- Click "Next" once more.
- Press the "Install" button, wait for the installation to complete.

Congratulations, Visual Studio Code is now installed.

## [Installing Git Bash](#installing-git-bash)

- Get the Git Bash setup file by clicking the "download" link at this Git Bash page
  [git-bash](https://git-scm.com/download/win).
- Run the downloaded file.
- You can either read the GNU General Public License if you enjoy reading such documents or just click "Next" like most people do without reading. 😉
- There's no need to toggle any components; simply click "Next" as usual.
- Select Visual Studio Code as Git's default editor and then click "Next."
- Let the git decide. "Next".
- Git from the command line and also from 3rd-party software, "Next".
- Use bundled Openssh, "Next".
- Use Openssl Library, "Next".
- Checkout windows style,"Next".
- Use MinTTY, "Next".
- Default, "Next".
- Git Credential Manager, "Next".
- Enable file system caching, "Next".
- Don't enable any experimental options, "Next".
- Then finally "Install". 🎉

## [Installing Node-js](#installing-node-js)

We need to install node-js to get node.js runtime component, node package manager (npm) and node.js package manager (npx). With these tools installed we can compile javascript assets, install, update, and manage JavaScript packages and libraries in  our laravel application.

Let's take a look at series of steps we need to execute in order to get Node-js up and running in our windows machine.

- Visit the official Node.js website at https://nodejs.org/. The website will automatically detect your operating system as Windows and display the recommended version for your system. You can download the LTS (Long Term Support) version, which is the most stable and widely used version.
- Locate the installation file and run it.
- Click "Next" to begin the installation.
- Read and accept the license agreement by checking the box and clicking "Next"
- Choose the installation location (the default is usually fine), and then click "Next"
- Don't customize the feature tree just click "Next"
- Don't bother with tools for native modules, click "Next"
- And finally, "Install" and "Finish"

Next, we'll add some helpful tools to Visual Studio Code for an easier experience when working with Laravel.

## [Installing Visual Studio Code Extensions For Laravel](#installing-visual-studio-code-extensions-for-laravel)

> Fortunately, there's the Laravel extension pack created by Winne Lin, which lets you install all the essential extensions for a seamless Laravel development experience with just one click
- Launch visual studio code.
- Click on the Extensions icon in the sidebar on the left-hand side of the window. It looks like a set of square puzzle pieces or can be found under the square icon in the sidebar.
- In the Extensions view, simply enter 'Laravel extension pack' into the search bar at the top and hit Enter. Look for the Laravel extension pack created by Winnie Lin and proceed to install it.
- We also need to install the 'PHP Intelephense' extension by Ben Mewburn for better php intelligence in vscode.

Now that you have all the necessary tools and services in place to start working with Laravel on Windows, take some time to explore and experiment. Try out various features of these tools, conduct research, and familiarize yourself with Laragon, Visual Studio Code, Git Bash, and Composer.

In this journey of setting up Laravel on Windows, we've set the stage for an exciting adventure in web development. We've successfully configured our environment and armed ourselves with essential tools, all ready to embark on this incredible voyage. Now, as you enter the realm of Laravel, remember that every line of code you write and every project you build is a step forward in your craft as an artisan. So, explore, create, and let your creativity soar. Your Laravel adventure has only just begun.



<!-- #### What is Laragon ?

: Laragon is a powerful and user-friendly local development environment primarily designed for web developers, particularly those working with PHP-based applications like Laravel. It provides a convenient and integrated platform for developing, testing, and running web applications on your local machine.

#### Why Laragon ?

Laragon is a compelling choice for local web development on Windows due to its user-friendly interface and powerful features. It simplifies the process of setting up a local development environment by offering one-click application installation, including popular platforms like Laravel and WordPress. Laragon supports both Apache and Nginx web servers, integrates with Git for version control, and comes pre-configured with database servers like MySQL and MariaDB. This platform is compatible with Windows, making it a convenient and efficient choice for web developers who want to create, test, and manage web applications in a hassle-free manner. Its flexibility, extensibility, and integrated tools, such as Composer for dependency management, make it a valuable tool for both beginners and experienced developers. -->
