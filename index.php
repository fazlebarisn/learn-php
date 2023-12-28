<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php</title>
</head>
<body>
    <?php
        $books = [
            [
                'name'      => 'Jol O Josona',
                'author'    => 'Humaun Ahmed',
                'year'      => 1990,
                'link'      => 'www.humaun.com',
            ],
            [
                'name'      => 'Shesher Kobita',
                'author'    => 'Robi Thakur',
                'year'      => 1980,
                'link'      => 'www.robi.com',
            ],
            [
                'name'      => 'Himu',
                'author'    => 'Humaun Ahmed',
                'year'      => 1980,
                'link'      => 'www.humaun.com',
            ],
        ];

        function fillterByAuthor( $books, $author ){

            $filteredBooks = [];

            foreach( $books as $book ){
                if( $book['author'] === $author ){
                    $filteredBooks[] = $book;
                }
            }

            return $filteredBooks;
        }
    ?>

    <h1>Recomended Books List</h1>

    <ul>
        <?php foreach( fillterByAuthor( $books, 'Robi Thakur' ) as $book ) : ?>
           <li><?= $book['name'] ?> By <?= $book['author'] ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>