@echo off
IF %1.==. GOTO COMMENT
git add *
git commit -a -m %1
git push origin master
GOTO END
:COMMENT
echo no commit comment
:END