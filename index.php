<?php

echo ""
. "<form action=\"upload.php\" method=\"post\" enctype=\"multipart/form-data\">"
. "<label for=\"file_name\">Наименование файла </label>"
. "<input type=\"text\" id=\"file_name\" name=\"file_name\"/><br/>"
. "<label for=\"content\">Файл </label>"
. "<input type=\"file\" id=\"content\" name=\"content\"/>"
. "<br/>"
. "<br/>"
. "<input type=\"submit\" value=\"Отправить\"/>"
. "</form>";