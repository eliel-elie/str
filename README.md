##Fluent String

This library offers more object-oriented and more fluent string manipulation.

![Maintainer](https://img.shields.io/badge/maintainer-Eliel%20Ferreira-informational)
![PHP](https://img.shields.io/badge/PHP->=5.6-blueviolet)
![VERSION](https://img.shields.io/badge/stable-v1.0.0-blue)
![BUILD](https://img.shields.io/badge/build-pass-success)
![LICENSE](https://img.shields.io/badge/license-MIT-success)

###Installation

<p>Available via Composer</p>

```composer require leafy-tech/str```

### Usage

**Str::after()**
```php
   // The Str::after method returns everything after the given value in a string.
   // The entire string will be returned if the value does not exist within the string: 
    
    use LeafyTech\Support\Str;
    
    $slice = Str::after('This is my name', 'This is');

    // ' my name'

```
**Str::afterLast()**
```php
   // The Str::afterLast method returns everything after the last occurrence of the given value in a string.
   // The entire string will be returned if the value does not exist within the string: 
    
    use LeafyTech\Support\Str;
    
    $slice = Str::afterLast('App\Http\Controllers\Controller', '\\');

    // 'Controller'

```

###License
The MIT License (MIT). Please see <a href="LICENSE">License File<a/> for more information.


** The inspiration and some of the API/code for this Laravel's Str.