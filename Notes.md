# Logarithm

Remember exponentials


10<sup>2</sup> = 100

log<sub>10</sub>100 = 2

log<sub>2</sub>8 = 3

2<sup>3</sup> = 2 * 2 * 2 = 8;

"How many 10s do we multiple to get 100?"

In the context of runtime performance in Big O Notation log always means log<sub>2</sub>

When searching for an element `k` in in an ordered sequence `n` where `1 <= k <= n`.

A simple search would be in the order of `n` or `O(n)`.

This means if the sequence is `n = 8`, then we would have to check up to `8` numbers at the most.

When using Binary Search, we would have a run time in the order of `O(log n)`.

When the running time of an algorithm to produce its result is the relative to the size of the input, we say the algorithm's running time is linear time.

As the size of the input increases, the time needed to run the algorithm increase proportionately.

However for the binary search algorithm which halves the input for each incorrect guess, the running time is log of n or logarithmic time.

So give 8 items, the number of guess i s only 3, which is log<sub>2</sub> 8
