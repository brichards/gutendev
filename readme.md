# Welcome!
This plugin is designed to be the instructional companion to the [WordCamp Miami 2018 Developer workshop](https://2018.miami.wordcamp.org/friday-developers/).

**Code samples are still being added. You'll need to pull a fresh copy of this plugin on Thursday night or Friday morning.**

In its default state this plugin does nothing. Throughout the workshop we will be enabling each new section and writing code to power our custom blocks. To enable each custom block, edit the `gutendev.php` file and uncomment the include statement for the given section. The `*-complete` directory includes final, working code for each lesson. Review and include these directories to see the desired outcome after practicing yourself in the working directories.

This plugin can be installed like every other WordPress plugin:

1. Add this plugin's folder to the `/wp-content/plugins/` directory (e.g. `git clone git@github.com:brichards/gutendev.git`)
1. Activate the plugin either via the 'Plugins' menu in WordPress or via WP-CLI (e.g. `wp plugin activate gutendev`)

----------------------------------

# WCMIA 2018 Developer Workshop
Hello! We are all very excited to host you for the Future of WordPress Development Workshop. Below are some notes to help you prepare for Friday's day-long event.

# Workshop Requirements
> ### Notice
>If you're not _**already**_ comfortable and experienced with writing both PHP and JavaScript you will find this workshop quite challenging. Our goal is to help **everyone** reach a comfort level creating custom gutenberg blocks but we know that new tech can be frustrating and may be beyond the current skill level of several attendees.
>
>Ideally, you're already comfortable creating custom plugins and writing your own JS interactions. Nevertheless, each speaker has worked hard to make the code examples accessible and as well-documented as possible. We have also prepared abundant resource material for further self-directed learning. If you get stuck, and our presenters cannot help you get unstuck, simply skip the practice assignments for now. Enjoy the presenters' slides and demos during the workshop then dive into the material again after you get home.

# Environment Setup
If you would like to practice alongside the presenters throughout the development workshop, you'll want to have a solid local development environment with all the following **already installed _before_ you arrive**:

- [WordPress 4.9+](https://wordpress.org/download/)
- [Gutenberg plugin](https://wordpress.org/plugins/gutenberg/)
- [WP-CLI](https://wp-cli.org/#installing)
- [git](https://git-scm.com/book/en/v2/Getting-Started-Installing-Git)
- [node.js & npm](https://docs.npmjs.com/getting-started/installing-node#using-a-version-manager-to-install-nodejs-and-npm)
- Your favorite code editor (we like [Sublime](https://www.sublimetext.com/), [VS Code](https://code.visualstudio.com/), [Atom](https://atom.io/), and many, many others, but stick with what you love).

Finally, you'll want to clone our [GutenDev sample plugin](https://github.com/brichards/gutendev/) from its GitHub repo into your development site's plugins directory. It's inside this plugin where we'll be practicing.

# Need a local development environment?
If you don't already have a good, working local development environment we recommend installing for this workshop [Local, by Flywheel](https://local.getflywheel.com/) (it's free). There are many great tools to choose from, though, if you'd like something different. We have instructions below for getting Local setup and configured in 6 easy steps.

All `code` lines below are items to be copy/pasted directly into the SSH terminal.
### 0. Install Local by Flywheel
Download the installer [for Mac](https://local-by-flywheel-flywheel.netdna-ssl.com/latest/mac) or [Windows](https://local-by-flywheel-flywheel.netdna-ssl.com/latest/windows).

### 1. Disable "Faster Docker Volumes" in Local's Advanced Preferences
This step is [necessary for git to have write permissions](http://local.getflywheel.com/community/t/using-git-fatal-write-error-permission-denied-in-app-folder/5009/3) inside an SSH connection:
![](https://d.pr/i/4TJvKT+)

### 2. Create a new site inside Local
- Take note of your selected URL, username, and password
- Once the site has been provisioned, right-click on the site and open an SSH terminal:
![](https://d.pr/i/5ipZx8+)

### 3. Install git
`apt-get update && apt-get -y install git`

### 4. Install node and npm
`wget -qO- https://raw.githubusercontent.com/creationix/nvm/v0.33.8/install.sh | NVM_DIR=/usr/local/nvm bash && \. /usr/local/nvm/nvm.sh && nvm install node`

### 5. Install gutenberg and the workshop starter plugin
- `cd /app/public/wp-content/plugins`
- `wp plugin install --activate gutenberg`
- `git clone https://github.com/brichards/gutendev.git`
- `git clone https://github.com/caldera-learn/alert-block.git`
- `wp plugin activate gutendev alert-block`

### 6. Update WP-CLI to latest release
- `wp cli update --yes`

### 7. Done!
Visit your local site in the browser and open the starter plugin in your code editor of choice.
