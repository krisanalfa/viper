## Viper

Viper is e **V** erything **I** s **PER** mitted, a simple blog management system written in PHP. Post something in markdown style, and you'll set to publish. I create this one for my beloved friends, Subhan Toba. So people now can write what is in their mind via a fun blogging system. Viper is free and should always be free.

## Philosophy

The main idea is create a simple blog management system, which you can feel happy when you write some text line by line.

## Requirement and Installation

### The requirement

- PHP >= 5.3
- Composer
- MongoDB
- PHP Mongo Client
- Xinix Account

### Installation

- Clone
- Run `composer install -vvv`
- Install MongoDb
- Install PHP Mongo Client
- Link the `www` to somewhere inside your web server path
- Ready to set

## FAQ

**Please have a time to check TODO.md file to get what's not being there in Viper**

|   Q   |   A   |
|-------|-------|
|What is Viper? | Viper is a carry ranged agility hero. Whoops. I mean, It's a very small and simple blog management system. Using markdown syntax for writing.|
|Why should I use Viper? | If you want a simple blog, share your mind, or maybe code. This is a good choice. Writing entry is so funny and i't really simple.|
|I want to change my identity. How do I do that? | Go to Author tab. Update your account there.|
|How do I create my post? | Go to Entries tab. Create your first entry there.|
|How do I update or delete my post? | Please, Sir, you can do it in Entries tab.|
|Why the avatar didn't shown as I expected? | You have to create a Gravatar ID by your email address in Author configuration.|
|Why some elements doesn't rendered well? | Composer update may help. But if the error still ocured, you may assign an issue. I'll fix as fast as I can.|
|How can I change theme? | See in templating and configuration section.|
|Can I use plain text instead of markdown? | Of course you can!|
|How do Viper attach a picture? | You CAN NOT attach picture to your post via VIPER, but you can use markdown syntax to attach the picture. First, upload your pic to somewhere, and then attach it to your post.|
|Can Viper attach a video? | Of course, you **CAN NOT**. You wanna build a YouTube or what?|
|I don't want use MongoDB, I want to use MySQL or SQL-Lite. | You can change them in config. It's a NORM feautre. But keep in mind, I HAVEN'T test it yet, so you have to create your own schema before you use that database. You must change the Norm config in `./config/chunks/norm.php`|
|I want to change my avatar. | Delete the avatar.jpeg in `./www/img/avatar.jpeg` and put your own there. The prefer dimension is: 80x80.|
|I want to add some feature. Can I? | Of course you can. Read the Developer Notes section.|

## Developer Notes

- Clone this repo
- Create a new branch
- Switch to your new branch
- Write some hack (PHP script follow PSR-2 coding standard)
- Create pull request
