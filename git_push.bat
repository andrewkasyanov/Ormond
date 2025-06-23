@echo off
setlocal enabledelayedexpansion

rem Устанавливаем кодировку UTF-8
chcp 65001 > nul

rem Укажите путь к вашему репозиторию
set REPO_PATH="C:\Users\kasya\Desktop\Aftermarket\Ormond"
cd /d %REPO_PATH%

rem Проверяем, является ли текущая директория Git-репозиторием
git rev-parse --is-inside-work-tree >nul 2>&1
if %errorlevel% neq 0 (
    echo Error: The current directory is not a Git repository.
    echo Please make sure the repository path is correct.
    pause
    exit /b
)

:menu
echo Choose an option:
echo 1. Git pull
echo 2. Git push
set /p OPTION=Enter option number (1 or 2):

if "%OPTION%"=="1" (
    git pull
    echo Git pull completed.
) else if "%OPTION%"=="2" (
    rem Проверяем наличие изменений
    git status --porcelain | findstr . >nul 2>&1
    if %errorlevel% equ 0 (
        rem Запрашиваем у пользователя ввод текста коммита
        set /p COMMIT_MESSAGE=Enter commit text:
        rem Проверяем, что сообщение не пустое
        if defined COMMIT_MESSAGE (
            rem Используем введенный текст в команде git commit
            git add .
            git commit -m "!COMMIT_MESSAGE!"
            git push -u origin main
        ) else (
            echo Error: Commit message cannot be empty.
        )
    ) else (
        echo No changes to commit.
    )
) else (
    echo Invalid option. Please enter 1 or 2.
    goto menu
)

pause
