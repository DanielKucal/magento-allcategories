# AllCategories

**AllCategories** module adds feature displaying all product categories in product page.

Just add code below to template */catalog/product/view.phtml*
```php
<?php echo $this->getChildHtml('allcategories') ?>
```
for example before product's short description.