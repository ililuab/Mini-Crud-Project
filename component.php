<?php

function component($product_name, $product_price, $product_image, $id){
    $element = "
    
    <div class=\"col-md-3 col-sm-6 my-3 my-md-0\">
                <form action=\"bestellen.php\" method=\"post\">
                    <div class=\"card shadow\">
                        <div>
                            <img src=\"$product_image\" alt=\"Image1\" class=\"img-fluid card-img-top\">
                        </div>
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">$product_name</h5>
                            <h6>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"far fa-star\"></i>
                            </h6>
                            <p class=\"card-text\">
                                Some quick example text to build on the card.
                            </p>
                            <h5>
                                <small><s class=\"text-secondary\">$519</s></small>
                                <span class=\"price\">$$product_price</span>
                            </h5>

                            <button type=\"submit\" class=\"btn btn-warning my-3\" name=\"add\">Toevoegen aan winkelwagen <i class=\"fas fa-shopping-cart\"></i></button>
                             <input type='hidden' name='product_id' value='$id'>
                        </div>
                    </div>
                </form>
            </div>
    ";
    echo $element;
}

function cartElement($product_image, $product_name, $product_price, $id){
    $element = "
    
    <form action=\"cart.php?action=remove&id=$id\" method=\"post\" class=\"cart-items\">
                    <div class=\"border rounded\">
                        <div class=\"row bg-white\">
                            <div class=\"col-md-3 pl-0\">
                                <img src=$product_image alt=\"Image1\" class=\"img-fluid\">
                            </div>
                            <div class=\"col-md-6\">
                                <h5 class=\"pt-2\">$product_name</h5>
                                <small class=\"text-secondary\">Verzender: ILI BISTRO</small>
                                <h5 class=\"pt-2\">$$product_price</h5>
                                <button type=\"submit\" class=\"btn btn-warning\">Bewaar voor later</button>
                                <button type=\"submit\" class=\"btn btn-danger mx-2\" name=\"remove\">Verwijder</button>
                            </div>
                            <div class=\"col-md-3 py-5\">
                                <div>
                                    <button type=\"button\" class=\"btn bg-light border rounded-circle\"><i class=\"fas fa-minus\"></i></button>
                                    <input type=\"text\" value=\"1\" class=\"form-control w-25 d-inline\">
                                    <button type=\"button\" class=\"btn bg-light border rounded-circle\"><i class=\"fas fa-plus\"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
";
    echo  $element;
}
