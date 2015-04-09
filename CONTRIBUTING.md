# How to contribute

Everybody should be able to help. Here's how you can make this project more
awesome:

1. [Fork it](https://github.com/gnugat/carew-next/fork_select)
2. improve it
3. submit a [pull request](https://help.github.com/articles/creating-a-pull-request)

Your work will then be reviewed as soon as possible (suggestions about some
changes, improvements or alternatives may be given).

## Keeping your fork up-to-date

To keep your fork up-to-date, you should track the upstream (original) one
using the following command:

    git remote add upstream https://github.com/gnugat/redaktilo.git

Then get the upstream changes:

    git checkout master
    git pull --rebase origin master
    git pull --rebase upstream master
    git checkout <your-branch>
    git rebase master

Finally, publish your changes:

    git push -f origin <your-branch>

Your pull request will be automatically updated.
