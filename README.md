## Fluent String

This library offers more object-oriented and more fluent string manipulation.

![Maintainer](https://img.shields.io/badge/maintainer-Eliel%20Ferreira-informational)
![PHP](https://img.shields.io/badge/PHP->=5.6-blueviolet)
![VERSION](https://img.shields.io/badge/stable-v1.0.5-blue)
![BUILD](https://img.shields.io/badge/build-pass-success)
![LICENSE](https://img.shields.io/badge/license-MIT-success)

### Installation

<p>Available via Composer</p>

```composer require leafy-tech/str```

### Usage

**Str::after()**
```php
   // The method returns everything after the given value in a string.
   // The entire string will be returned if the value does not exist within the string: 
    
    use LeafyTech\Support\Str;
    
    $slice = Str::after('This is my name', 'This is');

    // ' my name'

```
**Str::afterLast()**
```php
   // The method returns everything after the last occurrence of the given value in a string.
   // The entire string will be returned if the value does not exist within the string: 
    
    use LeafyTech\Support\Str;
    
    $slice = Str::afterLast('App\Controllers\Controller', '\\');

    // 'Controller'

```

**Str::before()**
```php
   // The method returns everything before the given value in a string:
    
    use LeafyTech\Support\Str;
    
    $slice = Str::before('This is my name', 'my name');

    // This is '

```

**Str::beforeLast()**
```php
   // The method returns everything before the given value in a string:
    
    use LeafyTech\Support\Str;
    
    $slice = Str::beforeLast('This is my name', 'is');

    // This '

```
**Str::between()**
```php
   // The method returns the portion of a string between two values:
    
    use LeafyTech\Support\Str;
    
    $slice = Str::between('This is my name', 'This', 'name');

    // is my '

```
**Str::camel()**
```php
   // The method converts the given string to camelCase:
    
    use LeafyTech\Support\Str;
    
    $slice = Str::camel('foo_bar');

    // fooBar

```
**Str::contains()**
```php
   // The method determines if the given string contains the given value. This method is case sensitive:
    
    use LeafyTech\Support\Str;
    
    $contains = Str::contains('This is my name', 'my');

    // true

    $contains = Str::contains('This is my name', ['my', 'foo']);

    // true
```
**Str::containsAll()**
```php
   // The method determines if the given string contains all of the values in a given array:
    
    use LeafyTech\Support\Str;
    
    $contains = Str::containsAll('This is my name', ['my','name']);

    // true
```
**Str::endsWith()**
```php
   // The method determines if the given string ends with the given value:
    
    use LeafyTech\Support\Str;
    
    $result = Str::endsWith('This is my name', 'name');

    // true
```
**Str::finish()**
```php
   // The method adds a single instance of the given value to a string if it does not already end with that value:
    
    use LeafyTech\Support\Str;
    
    $adjusted = Str::finish('this/string', '/');

    // this/string/

    $adjusted = Str::finish('this/string/', '/');

    // this/string/
```
**Str::headline()**
```php
   // The method will convert strings delimited by casing, hyphens, or underscores into a space delimited string with each word's first letter capitalized:
    
    use LeafyTech\Support\Str;
    
    $headline = Str::headline('steve_jobs');

    // Steve Jobs

    $headline = Str::headline('EmailNotificationSent');

    // Email Notification Sent
```
**Str::length()**
```php
   // The method returns the length of the given string:
    
    use LeafyTech\Support\Str;
    
    $length = Str::length('My name');

    // 7
```
**Str::limit()**
```php
   // The method truncates the given string to the specified length:
    
    use LeafyTech\Support\Str;
    
    $truncated = Str::limit('The quick brown fox jumps over the lazy dog', 20);

    // The quick brown fox...

    //You may pass a third argument to the method to change the string that will be appended to
    // the end of the truncated string:

    $truncated = Str::limit('The quick brown fox jumps over the lazy dog', 20, ' (...)');

    // The quick brown fox (...)
```
**Str::lower()**
```php
   // The method converts the given string to lowercase:
    
    use LeafyTech\Support\Str;
    
    $converted = Str::lower('MY NAME');

    // my name
```
**Str::mask()**
```php
   // The ethod masks a portion of a string with a repeated character, and may be used to obfuscate segments of strings such as email
   // addresses and phone numbers:
    
    use LeafyTech\Support\Str;
    
    $string = Str::mask('taylor@example.com', '*', 3);

    // tay***************

    //If needed, you provide a negative number as the third argument to the mask method,
    // which will instruct the method to begin masking at the given distance from the end of the string:

    $string = Str::mask('taylor@example.com', '*', 3, 3);

    // tay***@example.com
```
**Str::padBoth()**
```php
   // The method wraps PHP's str_pad function, padding both sides of a string with another
   // string until the final string reaches a desired length:
    
    use LeafyTech\Support\Str;
    
    $padded = Str::padBoth('James', 10, '_');

    // '__James___'

    $padded = Str::padBoth('James', 10);

    // '  James   '
```
**Str::padLeft()**
```php
   // The method wraps PHP's str_pad function, padding both sides of a string with another
   // string until the final string reaches a desired length:
    
    use LeafyTech\Support\Str;
    
    $padded = Str::padLeft('James', 10, '-=');

    // '-=-=James'

    $padded = Str::padLeft('James', 10);

    // '   James'
```
**Str::padRight()**
```php
   // The method wraps PHP's str_pad function, padding both sides of a string with another
   // string until the final string reaches a desired length:
    
    use LeafyTech\Support\Str;
    
    $padded = Str::padRight('James', 10, '-');

    // 'James-----'

    $padded = Str::padRight('James', 10);

    // 'James    '
```
**Str::remove()**
```php
   // The method removes the given value or array of values from the string:
    
    use LeafyTech\Support\Str;
    
    $string = 'Peter Piper picked a peck of pickled peppers.';

    $removed = Str::remove('e', $string);

    // Ptr Pipr pickd a pck of pickld ppprs.
```
**Str::replace()**
```php
   // The method replaces a given string within the string:
    
    use LeafyTech\Support\Str;
    
    $string = 'My last name';

    $removed = Str::replace('last', 'first', $string);

    // My first name
```
**Str::replaceArray()**
```php
   // The method replaces a given value in the string sequentially using an array:
    
    use LeafyTech\Support\Str;
    
    $string = 'The event will take place between ? and ?';

    $replaced = Str::replaceArray('?', ['8:30', '9:00'], $string);

    // The event will take place between 8:30 and 9:00
```
**Str::replaceFirst()**
```php
   // The  method replaces the first occurrence of a given value in a string:
    
    use LeafyTech\Support\Str;
    
    $replaced = Str::replaceFirst('the', 'a', 'the quick brown fox jumps over the lazy dog');

    // a quick brown fox jumps over the lazy dog
```
**Str::replaceLast()**
```php
   // The method replaces the last occurrence of a given value in a string:
    
    use LeafyTech\Support\Str;
    
    $replaced = Str::replaceLast('the', 'a', 'the quick brown fox jumps over the lazy dog');

    // the quick brown fox jumps over a lazy dog
```
**Str::slug()**
```php
   // The method generates a URL friendly "slug" from the given string:
    
    use LeafyTech\Support\Str;
    
    $slug = Str::slug('My Fist name is James', '-');

    // my-first-name-is-james
```
**Str::start()**
```php
   // The method adds a single instance of the given value to a string if it does not
   // already start with that value:
    
    use LeafyTech\Support\Str;
    
    $adjusted = Str::start('this/string', '/');

    // /this/string

    $adjusted = Str::start('/this/string', '/');

    // /this/string
```
**Str::startsWith()**
```php
   // The method determines if the given string begins with the given value:
    
    use LeafyTech\Support\Str;
    
    $result = Str::startsWith('This is my name', 'This');

    // true
```
**Str::substr()**
```php
   // The method returns the portion of string specified by the start and length parameters:
    
    use LeafyTech\Support\Str;
    
    $converted = Str::substr('This is my name', 5, 2);

    // is
```
**Str::substrCount()**
```php
   // The method returns the number of occurrences of a given value in the given string:
    
    use LeafyTech\Support\Str;
    
    $count = Str::substrCount('If you like ice cream, you will like snow cones.', 'like');

    // 2
```
**Str::title()**
```php
   // The method converts the given string to Title Case:
    
    use LeafyTech\Support\Str;
    
    $converted = Str::title('a nice title uses the correct case');

    // A Nice Title Uses The Correct Case
```
**Str::ucfirst()**
```php
   // The method returns the given string with the first character capitalized:
    
    use LeafyTech\Support\Str;
    
    $string = Str::ucfirst('foo bar');

    // Foo bar
```
**Str::upper()**
```php
   // The method converts the given string to uppercase:
    
    use LeafyTech\Support\Str;
    
    $string = Str::upper('foo bar');

    // FOO BAR
```
**Str::wordCount()**
```php
   // The method returns the number of words that a string contains:
    
    use LeafyTech\Support\Str;
    
    Str::wordCount('Hello, world!');

    // 2
```
**Str::words()**
```php
   // The method limits the number of words in a string. An additional string may be
   // passed to this method via its third argument to specify which string should
   // be appended to the end of the truncated string:
    
    use LeafyTech\Support\Str;
    
    $result = Str::words('Perfectly balanced, as all things should be.', 3, ' >>>');

    // Perfectly balanced, as >>>
```
**when**
```php
   // The method invokes the given closure if a given condition is true. The closure will
   // receive the fluent string instance:
    
    use LeafyTech\Support\Str;
    
    $string = Str::of('Taylor')
                ->when(true, function ($string) {
                    return $string->append(' Otwell');
                });

    // 'Taylor Otwell'
```
**whenEmpty**
```php
   // The method invokes the given closure if the string is empty. If the closure returns
   // a value, that value will also be returned by the whenEmpty method. If the closure
   // does not return a value, the fluent string instance will be returned:
    
    use LeafyTech\Support\Str;
    
    $string = Str::of('')->whenEmpty(function ($string) {
        return $string->trim()->prepend('Test');
    });

    // 'Test'
```


<br>
<br>
<br>
<br>
<br>
<br>
<br>

### License
The MIT License (MIT). Please see <a href="LICENSE">License File<a/> for more information.


** The inspiration and some API/code for this Laravel's Str. This extension is the port of Laravel's Str component (https://laravel.com/docs/8.x/helpers#strings-method-list)
