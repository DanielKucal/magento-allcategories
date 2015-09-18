# AllCategories
#### Magento module

**Merix_AllCategories** module adds feature displaying all product categories on product page.

Just add code below to template */catalog/product/view.phtml*
```php
<?php echo $this->getChildHtml('allcategories') ?>
```
for example before product's short description.

Module is ready to install via [Modman](https://github.com/colinmollenhour/modman).

##### Created for **[MerixStudio](http://merixstudio.com)**.