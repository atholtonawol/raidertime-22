# raidertime-22

The 2022 Atholton Raider Time website.

Brought to you by Ms. Rhee's 3rd period class.

To clone github to Bluehost server:
If you are copy/pasting the commands, be careful not to copy an extra space before/after the command. To paste in the Windows command prompt, right click on the window.

1. Open command prompt
Run: `ssh ahsraid1@ahsraidertime.org`
Password: `AtholtonRT2122!`

2. Use the sync script to clone the repo to the server
Run: `./sync_github.sh`

3. Refresh the website and your updates should be reflected.


OUTDATED, RUN SCRIPT ABOVE INSTEAD:
2. Go to repositories directory:
`cd public_html/repositories`

3. Delete existing repo folder. Run this command, then type y twice to confirm the delete. Be careful, deleting a file cannot be undone!
`rm raidertime-22 -r`

4. Clone repo from Github:
`git clone https://github.com/atholtonawol/raidertime-22.git`
