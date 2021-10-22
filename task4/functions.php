<?php
function ghostBook(): array
{
    return (array)(file(__DIR__ . '/ghost.txt',FILE_IGNORE_NEW_LINES));
}