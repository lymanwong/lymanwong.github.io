## Release 3: Basic Git Commands
Define the following commands and describe how they work/what they do.


#### add
git add filename
This adds a file for your git to track changes and takes a snapshot of it at that moment.

#### branch
git branch
This will list out all of the branches.  The branch you are working on is marked with an *. 
E.g.  * master

git branch branchname
This command will create a new branch.

git branch -v
This will list out all of the branches with their last commits.

git branch -d branchname
This will delete a branch.

#### checkout
git checkout branchname
The default branch you are working on is Master and you can change branches by adding the branch name

#### clone
git clone urlofproject
People will use this command if you need to work with someone on a project, or if you want to get a copy of a project so you can look at their code. It will copy the entire history of that project so you can have it locally and it will give you a working directory of the main branch of that project.

#### commit
git commit -m "description of what you did"
After (add)ing your file to your git and you are satisified with the changes you've made, you will place it in a ready state to push it to github.  You will need to add a description to complete the commit.

#### fetch
git fetch
This command will sync your git with another repo and pull down any data that you don't have locally.  This is called "remote branches" and you cannot check them out, but you can merge from them to other branches, run history logs on them, etc.  You can do all of that stuff locally after you sync.

#### log
git log
This command will display all the commit messages that have lead up to the snapshot you are currently on.  In addition to the manifest of files and commit message and information about the person who commited it, Git also stores the commit that you based this snapshot on.

#### merge
git merge
This command will merge any branch into your current branch. If you are currently in master and want to include removals:
git merge removals

#### pull
git pull
This command will run a git fetch followed by a git merge of the branch on that remote that is tracked by whatever branch you are currently in. Running the fetch and merge commands seperately involves less problems.

#### push
git push
This will update all of your committed files to your github account.

#### reset
git reset HEAD -- filename
You can use it to unstage something that has been accidentally staged (committed). 

git reset --soft
Will undo the last commit and the files touched will be back on the stage again.

git reset --hard
The most dangerous to use.  This will make your working directory look like the index, unstage files and undo any changes made since the last commit.

#### rm
git rm filename
This will remove a file from being tracked.

#### status
git status
It will show you if any changes have been made to a tracked document.  It will also tell you other type of statuses.  It will also tell you other documents in the current folder that is not tracked.

## Release 5: Git Workflow

- Push files to a remote repository
git status
git add filename
git status
git commit -m "adding a file to my github"
git push

- Fetch changes
git fetch

- Commit locally
git add filename

## Release 6: Errors you encountered
1. Error
2. Solution
3. Cause (explain the error)

## Release 7: Reflection

- What do you like about git?
I like git tracks your changes and you can sync it when you want to.

- What is confusing to you about git?
When git and github goes out of sync.  I won't know that I cannot sync until I hit an error. Another issue I came across is when there is a nested file, which causes the file not to open on github.

- Did you have any moments that solidified concepts?
I think just using it more often helps make it easier for me to use.

- Did you find any outside resources that helped you better understand these concepts?
How to remove a nested repo: https://www.youtube.com/watch?v=BEE66nNi-3c

