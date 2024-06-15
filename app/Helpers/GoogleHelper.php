<?php

function google_view_file(string $id): string
{
    return 'https://drive.google.com/uc?export=view&id=' . $id;
}
