<?php

namespace LeafyTech\Support;

use JsonSerializable;
use LeafyTech\Support\Traits\Conditionable;

class Stringable implements JsonSerializable
{
    use Conditionable;

    /**
     * The underlying string value.
     *
     * @var string
     */
    protected $value;

    /**
     * Create a new instance of the class.
     *
     * @param  string  $value
     * @return void
     */
    public function __construct($value = '')
    {
        $this->value = (string) $value;
    }

    /**
     * Return the remainder of a string after the first occurrence of a given value.
     *
     * @param  string  $search
     * @return static
     */
    public function after($search)
    {
        return new static(Str::after($this->value, $search));
    }

    /**
     * Return the remainder of a string after the last occurrence of a given value.
     *
     * @param  string  $search
     * @return static
     */
    public function afterLast($search)
    {
        return new static(Str::afterLast($this->value, $search));
    }

    /**
     * Append the given values to the string.
     *
     * @param  array  $values
     * @return static
     */
    public function append($values)
    {
        return new static($this->value.implode('', is_array($values)
                ? $values
                : [$values] ));
    }

    /**
     * Get the trailing name component of the path.
     *
     * @param  string  $suffix
     * @return static
     */
    public function basename($suffix = '')
    {
        return new static(basename($this->value, $suffix));
    }

    /**
     * Get the portion of a string before the first occurrence of a given value.
     *
     * @param  string  $search
     * @return static
     */
    public function before($search)
    {
        return new static(Str::before($this->value, $search));
    }

    /**
     * Get the portion of a string before the last occurrence of a given value.
     *
     * @param  string  $search
     * @return static
     */
    public function beforeLast($search)
    {
        return new static(Str::beforeLast($this->value, $search));
    }

    /**
     * Get the portion of a string between two given values.
     *
     * @param  string  $from
     * @param  string  $to
     * @return static
     */
    public function between($from, $to)
    {
        return new static(Str::between($this->value, $from, $to));
    }

    /**
     * Convert a value to camel case.
     *
     * @return static
     */
    public function camel()
    {
        return new static(Str::camel($this->value));
    }

    /**
     * Determine if a given string contains a given substring.
     *
     * @param  string|array  $needles
     * @return bool
     */
    public function contains($needles)
    {
        return Str::contains($this->value, $needles);
    }

    /**
     * Determine if a given string contains all array values.
     *
     * @param  array  $needles
     * @return bool
     */
    public function containsAll(array $needles)
    {
        return Str::containsAll($this->value, $needles);
    }

    /**
     * Determine if a given string ends with a given substring.
     *
     * @param  string|array  $needles
     * @return bool
     */
    public function endsWith($needles)
    {
        return Str::endsWith($this->value, $needles);
    }

    /**
     * Determine if the string is an exact match with the given value.
     *
     * @param  string  $value
     * @return bool
     */
    public function exactly($value)
    {
        return $this->value === $value;
    }

    /**
     * Explode the string into an array.
     *
     * @param  string  $delimiter
     * @param  int  $limit
     * @return array
     */
    public function explode($delimiter, $limit = PHP_INT_MAX)
    {
        return explode($delimiter, $this->value, $limit);
    }

    /**
     * Split a string using a regular expression or by length.
     *
     * @param  string|int  $pattern
     * @param  int  $limit
     * @param  int  $flags
     * @return array
     */
    public function split($pattern, $limit = -1, $flags = 0)
    {
        if (filter_var($pattern, FILTER_VALIDATE_INT) !== false) {
            return str_split($this->value, $pattern);
        }

        $segments = preg_split($pattern, $this->value, $limit, $flags);

        return ! empty($segments) ? $segments : [];
    }

    /**
     * Cap a string with a single instance of a given value.
     *
     * @param  string  $cap
     * @return static
     */
    public function finish($cap)
    {
        return new static(Str::finish($this->value, $cap));
    }

    /**
     * Determine if the given string is empty.
     *
     * @return bool
     */
    public function isEmpty()
    {
        return $this->value === '';
    }

    /**
     * Determine if the given string is not empty.
     *
     * @return bool
     */
    public function isNotEmpty()
    {
        return ! $this->isEmpty();
    }

    /**
     * Return the length of the given string.
     *
     * @param  string  $encoding
     * @return int
     */
    public function length($encoding = null)
    {
        return Str::length($this->value, $encoding);
    }

    /**
     * Limit the number of characters in a string.
     *
     * @param  int  $limit
     * @param  string  $end
     * @return static
     */
    public function limit($limit = 100, $end = '...')
    {
        return new static(Str::limit($this->value, $limit, $end));
    }

    /**
     * Convert the given string to lower-case.
     *
     * @return static
     */
    public function lower()
    {
        return new static(Str::lower($this->value));
    }

    /**
     * Masks a portion of a string with a repeated character.
     *
     * @param  string  $character
     * @param  int  $index
     * @param  int|null  $length
     * @param  string  $encoding
     * @return static
     */
    public function mask($character, $index, $length = null, $encoding = 'UTF-8')
    {
        return new static(Str::mask($this->value, $character, $index, $length, $encoding));
    }

    /**
     * Get the string matching the given pattern.
     *
     * @param  string  $pattern
     * @return static
     */
    public function match($pattern)
    {
        return new static(Str::match($pattern, $this->value));
    }

    /**
     * Determine if the string matches the given pattern.
     *
     * @param  string  $pattern
     * @return bool
     */
    public function test($pattern)
    {
        return $this->match($pattern)->isNotEmpty();
    }

    /**
     * Pad both sides of the string with another.
     *
     * @param  int  $length
     * @param  string  $pad
     * @return static
     */
    public function padBoth($length, $pad = ' ')
    {
        return new static(Str::padBoth($this->value, $length, $pad));
    }

    /**
     * Pad the left side of the string with another.
     *
     * @param  int  $length
     * @param  string  $pad
     * @return static
     */
    public function padLeft($length, $pad = ' ')
    {
        return new static(Str::padLeft($this->value, $length, $pad));
    }

    /**
     * Pad the right side of the string with another.
     *
     * @param  int  $length
     * @param  string  $pad
     * @return static
     */
    public function padRight($length, $pad = ' ')
    {
        return new static(Str::padRight($this->value, $length, $pad));
    }

    /**
     * Prepend the given values to the string.
     *
     * @param  array  $values
     * @return static
     */
    public function prepend($values)
    {
        return new static(implode('', is_array($values) ? $values : [$values]).$this->value);
    }

    /**
     * Remove any occurrence of the given string in the subject.
     *
     * @param  string|array<string>  $search
     * @param  bool  $caseSensitive
     * @return static
     */
    public function remove($search, $caseSensitive = true)
    {
        return new static(Str::remove($search, $this->value, $caseSensitive));
    }

    /**
     * Repeat the string.
     *
     * @param  int  $times
     * @return static
     */
    public function repeat($times)
    {
        return new static(Str::repeat($this->value, $times));
    }

    /**
     * Replace the given value in the given string.
     *
     * @param  string|string[]  $search
     * @param  string|string[]  $replace
     * @return static
     */
    public function replace($search, $replace)
    {
        return new static(Str::replace($search, $replace, $this->value));
    }

    /**
     * Replace the first occurrence of a given value in the string.
     *
     * @param  string  $search
     * @param  string  $replace
     * @return static
     */
    public function replaceFirst($search, $replace)
    {
        return new static(Str::replaceFirst($search, $replace, $this->value));
    }

    /**
     * Replace the last occurrence of a given value in the string.
     *
     * @param  string  $search
     * @param  string  $replace
     * @return static
     */
    public function replaceLast($search, $replace)
    {
        return new static(Str::replaceLast($search, $replace, $this->value));
    }

    /**
     * Begin a string with a single instance of a given value.
     *
     * @param  string  $prefix
     * @return static
     */
    public function start($prefix)
    {
        return new static(Str::start($this->value, $prefix));
    }

    /**
     * Convert the given string to upper-case.
     *
     * @return static
     */
    public function upper()
    {
        return new static(Str::upper($this->value));
    }

    /**
     * Convert the given string to title case.
     *
     * @return static
     */
    public function title()
    {
        return new static(Str::title($this->value));
    }

    /**
     * Convert the given string to title case for each word.
     *
     * @return static
     */
    public function headline()
    {
        return new static(Str::headline($this->value));
    }

    /**
     * Generate a URL friendly "slug" from a given string.
     *
     * @param  string  $separator
     * @param  string|null  $language
     * @return static
     */
    public function slug($separator = '-', $language = 'en')
    {
        return new static(Str::slug($this->value, $separator, $language));
    }

    /**
     * Convert a string to snake case.
     *
     * @param  string  $delimiter
     * @return static
     */
    public function snake($delimiter = '_')
    {
        return new static(Str::snake($this->value, $delimiter));
    }

    /**
     * Determine if a given string starts with a given substring.
     *
     * @param  string|array  $needles
     * @return bool
     */
    public function startsWith($needles)
    {
        return Str::startsWith($this->value, $needles);
    }

    /**
     * Convert a value to studly caps case.
     *
     * @return static
     */
    public function studly()
    {
        return new static(Str::studly($this->value));
    }

    /**
     * Returns the portion of the string specified by the start and length parameters.
     *
     * @param  int  $start
     * @param  int|null  $length
     * @return static
     */
    public function substr($start, $length = null)
    {
        return new static(Str::substr($this->value, $start, $length));
    }

    /**
     * Returns the number of substring occurrences.
     *
     * @param  string  $needle
     * @param  int|null  $offset
     * @param  int|null  $length
     * @return int
     */
    public function substrCount($needle, $offset = null, $length = null)
    {
        return Str::substrCount($this->value, $needle, is_null($offset) ? 0 : $offset, $length);
    }

    /**
     * Make a string's first character uppercase.
     *
     * @return static
     */
    public function ucfirst()
    {
        return new static(Str::ucfirst($this->value));
    }

    /**
     * Trim the string of the given characters.
     *
     * @param  string  $characters
     * @return static
     */
    public function trim($characters = null)
    {
        return new static(trim($this->value, $characters));
    }

    /**
     * Left the string of the given characters.
     *
     * @param  string  $characters
     * @return static
     */
    public function ltrim($characters = null)
    {
        return new static(ltrim($this->value, $characters));
    }

    /**
     * Right the string of the given characters.
     *
     * @param  string  $characters
     * @return static
     */
    public function rtrim($characters = null)
    {
        return new static(rtrim($this->value, $characters));
    }

    /**
     * Execute the given callback if the string is empty.
     *
     * @param  callable  $callback
     * @return static
     */
    public function whenEmpty($callback)
    {
        if ($this->isEmpty()) {
            $result = $callback($this);

            return is_null($result) ? $this : $result;
        }

        return $this;
    }

    /**
     * Execute the given callback if the string is not empty.
     *
     * @param  callable  $callback
     * @return static
     */
    public function whenNotEmpty($callback)
    {
        if ($this->isNotEmpty()) {
            $result = $callback($this);

            return is_null($result) ? $this : $result;
        }

        return $this;
    }

    /**
     * Limit the number of words in a string.
     *
     * @param  int  $words
     * @param  string  $end
     * @return static
     */
    public function words($words = 100, $end = '...')
    {
        return new static(Str::words($this->value, $words, $end));
    }

    /**
     * Get the number of words a string contains.
     *
     * @return int
     */
    public function wordCount()
    {
        return str_word_count($this->value);
    }

    public function jsonSerialize()
    {
        return $this->__toString();
    }

    /**
     * Get the raw string value.
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->value;
    }
}