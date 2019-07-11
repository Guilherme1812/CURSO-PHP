<?php

setlocale(LC_ALL, "pt-BR", "pt-BR.utf-8", "portuguese");// LC_all quer dizer pra mudar toda a localização para português// cada sistema tem um padrão de linguagem então inswerimos as três para não haver erros
echo ucwords(strftime("Hoje é dia: %d/%B/%G"));// olhar no documento do php..



?>