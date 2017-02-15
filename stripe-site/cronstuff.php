
# Open Terminal

# You need to ssh into your account.

ssh amajor@web449.webfaction.com

# This is correct.
# hit enter 

# Enter your Password for your account (server password)

amajorgreggy*************************************************************************

# hit enter 

# Type the following:
# this makes it easier - EDITOR=nano
crontab -e

# this is to edit a cron 
# hit enter 

# Press ÔiÕ to go into vimÕs insert mode
i

# I don't exactly know what this is, but I think it's so you can insert things into the cron you're editing 
# hit enter

# Insert your cron job
#  MAILTO=greg@amajor.net   specifies where to send error emails I think...

MAILTO=greg@amajor.net

# hit enter  I THINK? OR MAYBE I SHOULD TYPE THE MAILTO LIN AND THEN BELOW IT THE CRON LINE THEN HIT ENTER??? 

5 14 * * * /usr/local/bin/php /home/amajor/webapps/amajorguitarlessons/stripe-site/StripeCron.php > /dev/null 2>&1

#    5 13 * * *         means it will run every day at 1:05pm 
#   their example:      /home/username/webapps/PATHTO/sendy/scheduled.php
#   /usr/local/bin/php   means run a php code I think...
#   /usr/local/bin/php   BUT SHOULD I CHANGE THIS AT ALL????? 
#   /home/amajor/webapps/amajorguitarlessons/stripe-site/StripeCron.php
#                        specifies which php code to run i think.. 
#   > /dev/null 2>&1     means send no error emails at all
#   > /dev/null          means send only the normal error messages

# hit enter 


#  press esc to exit vim's insert mode
esc
# hit enter 

# Type ZZ ( must be capital letters )
ZZ

# WHAT IS THIS? WHAT DOES ZZ DO? 
# hit enter 


