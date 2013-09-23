String-Similarity
=================

Calculate the similarity between two strings by rewarding both common sub-strings and common letter orderings.

<img src="https://d3fuw6vo22gqor.cloudfront.net/images/string_sim.gif" />

<h6>Where:</h6>
`s1` = The character pairs of string 1
<br>
`s2` = The character pairs of string 2

<h6>In words: </h6>
The similarity of string1 to string2 is equal to two times the number of incommon character pairs divided by the sum of the total number of character pairs in each string.

<h4>Example:</h4>
Strings:
<br>
`string1` = "Financial"
<br>
`string2` = "Finance"
<br>
<br>
Character Pairs:
<br>
`s1` = "fi", "in", "na", "an", "nc", "ci", "ia", "al"
<br>
`s2` = "fi", "in", "na", "an", "nc", "ce"
<br>
<br>
similarity(s1, s2) = `(2 * 5) / (8 + 6)` = 0.7142

____
<strong>In Python:</strong>
<br>
Include wordSim.py and charPair.py in your directory</li>
```python
  from wordSim import similarity
  
  string1 = "Financial"
  string2 = "Finance"
  sim = similarity(string1, string2).get_sim()
  
  print sim
  >> 0.7142
```
<strong>In PHP:</strong>
<br>
Include wordSim.php in your directory</li>
```php
  include('/wordSim.php');
  
  $string1 = "Financial";
  $string2 = "Finance";
  $sim = Similarity::calculate($string1, $string2);
  
  echo $sim;
  >> 0.7142
```
<strong>In RUBY:</strong>
<br>
Coming soon...
