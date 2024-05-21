This Code to add the Custom Product Attribute in Order Summary

In this, I will try with manufacturer Attribute.

Step 1: Setup **manufacturer** Attribute in Magento Admin

Step2: Clone This Code and run command

Step3: Copy code in app/code/Mageplaza

Step4: Run this bellow command 

    php bin/magento setup:upgrade
    
    php bin/magento setup:di:compile
    
    php bin/magento setup:static-content:deploy -f
    
    php bin/magento cache:flush


And this is Result:
![img.png](img.png)
