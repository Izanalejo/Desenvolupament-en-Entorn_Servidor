<div id="content">
    <fieldset>
        <legend>Product list</legend>   
        <?php
            if (isset($content)) {
                echo <<<EOT
                    <table>
                        <tr>
                            <th>Id</th>
                            <th>Brand</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Price</th>
                            <th>Product Type</th>
                        </tr>
EOT;
                foreach ($content as $product) {
                    echo <<<EOT
                        <tr>
                            <td>{$product->getId()}</td>
                            <td>{$product->getBrand()}</td>
                            <td>{$product->getName()}</td>
                            <td>{$product->getDescription()}</td>
                            <td>{$product->getPrice()}€</td>
                            <td>{$product->getProductType()}</td>
                        </tr>
EOT;
                }
                echo <<<EOT
                    </table>
EOT;
            }
        ?>
    </fieldset>
</div>