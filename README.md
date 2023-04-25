# raidertime-22

The 2022-2023 Atholton Raider Time website.

Brought to you by Ms. Rhee's 3rd period class.

**Check out the project wiki for lots of notes on how to do things and how the site was built: https://github.com/atholtonawol/raidertime-22/wiki**

**If the website won't load, it may be because wordpress overwrote `public_html/index.php`. Check [index.php](https://github.com/atholtonawol/raidertime-22/wiki/Website-Setup-and-File-Layout#indexphp) in [Website Setup and File Layout](https://github.com/atholtonawol/raidertime-22/wiki/Website-Setup-and-File-Layout) in the wiki for the code that should be in `public_html/index.php`. Alternatively, you can view the 2022 site at https://ahsraidertime.org/repositories/raidertime-22/main.php**

---

### To sync Github to Bluehost server

**1. Open command prompt**

Run: `ssh ahsraid1@ahsraidertime.org`

Password: Check the login document

**2. Use the sync script to clone the repo to the server**

Run: `./sync_github.sh`

**3. Refresh the website and your updates should be reflected.**

&nbsp;

**Tips:**
* If you are copy/pasting the commands, be careful not to copy an extra space before/after the command.
* To paste in the Windows command prompt, right click on the window.
* The Shell tab's terminal in repl.it can also be used to SSH into the server, if you are on a Chromebook.
* ***Do not put passwords in the repository, as this repo is publicly accessible.***

