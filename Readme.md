1. [Zadania są tu](Tasks.md) (ogólnie traktuj je jako wskazówki , jakie kroki milowe ale projekt robisz według swojego widzimisie)
2. Poczytaj o docker i docker-compose, to klucz do zrozumienia tego. Są kursy na YT
3. Poczytaj o GIT, żeby ściągnąć ten projekt użyj komendy: _git clone git@github.com:zsdamian/praktyki.git_ . Zanim to jednak zrobisz podeślesz mi swoją nazwę konta, muszę dać Ci prawa zapisu.
2. W src robisz projekt php, PISZ OBIEKTOWO, ROBIMY MVC  http://www.php.pl/Wortal/Artykuly/Framework/Frameworki-dla-PHP-czyli-wydajne-tworzenie-aplikacji/MVC !!!!
2. Dockerfile to definicja obrazu php + apache2, tam dokonujesz modyfikacji swojego środowiska
3. W docker-compose masz kompozycję wszystkich używanych obrazów (tego od php i tego od mysql) 


#### Odpalenie projektu

        docker-compose up -d

Adres aplikacji: localhost:8000

#### Wejście do kontenera

        docker exec -it practice_php bash 
        docker exec -it practice_mysql bash 


Restart środowiska

        docker-compose restart

Przebudowanie

        docker-compose down
        docker-compose up -d --build
