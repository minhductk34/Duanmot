<!DOCTYPE html>
<html>
<head>
    <title>Search Results</title>
</head>
<body>
    <h1>Search Results</h1>
    
    <?php if (!empty($products)) : ?>
        <ul>
            <?php foreach ($products as $product) : ?>
                <li>
                    <h2><?php echo $product->getName(); ?></h2>
                    <p><?php echo $product->getDescription(); ?></p>
                    <img src="<?php echo $product->getImage(); ?>" alt="Product Image">
                    <p>Price: <?php echo $product->getPrice(); ?></p>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php else : ?>
        <p>No results found.</p>
    <?php endif; ?>
</body>
</html>