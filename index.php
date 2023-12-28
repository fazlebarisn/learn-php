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

        /**
         * This function will filter boos by author
         * @param array $books
         * @param string $author
         */
        function fillterByAuthor( $books, $author ){
            // defain an empty array
            $filteredBooks = [];

            foreach( $books as $book ){
                if( $book['author'] === $author ){
                    // if logic match add in to $filteredBooks array
                    $filteredBooks[] = $book;
                }
            }
            // return new array 
            return $filteredBooks;
        }

        $filteredBooks = fillterByAuthor( $books, 'Robi Thakur');
    ?>

    <h1>Recomended Books List</h1>

    <ul>
        <?php foreach( $filteredBooks as $book ) : ?>
           <li><?= $book['name'] ?> By <?= $book['author'] ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>