# Console Version Mask Map in Taiwan
## Install Relation Library
```shell
> composer install
```
## Usage
### Run the program
```shell
> php mask.php
```
By doing this, program will automately download (if available) data and wait user input keyword to search.
### Search
Just type keyword and program will show all matched possible institutuion and address.
Otherwise, type commands to do something.
### Commands
* man: Show all commands
* clear: Clear console
* exit: Exit the program
* ^c: Exit the program
* continue: continue search on current
### Example
1. We try to search "長春"
   ![](https://i.imgur.com/osLOGmG.png)
2. We get all possible whose institution name have "長春" or address is at 長春
   ![](https://i.imgur.com/RCvxX9B.png)
3. However, That's a little bit to more!
   We need more accurate search!
   So, let me use "continue" command to search our result now.
   ![](https://i.imgur.com/sjlCPdi.png)
4. Boom! By make another search, I got my result!
   However, it's a little bit sad that it seems all mask for adult had been sold out.
   ![](https://i.imgur.com/5CkSgyh.png)
