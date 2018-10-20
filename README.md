# php-questions

# Question 2


count the number of molecules in a cup of soda which contains distilled water, carbon dioxide, andglucose.
You have a machine that counts the number of atoms of carbon, hydrogen, and oxygen in a givensample.
Input Format
The input consists of a single line with three space separated integers:c,h, and o 
where
c is the count of carbon atomsh​is the count of hydrogen atomso is the count of oxygen atoms Constraints
0≤c,h,o< 1010
Output Format
If the number of atoms is consistent  with a mixture containing only water, carbon dioxide, and glucosemolecules , 
the output should consist of a single line containing three space separated integers: thenumber of water molecules,
the number of carbon dioxide molecules, and the number of glucosemolecules.If the number of atoms is not consistent
with a mixture containing only water, carbon dioxide, andglucose molecules , the output should consist of a line 
containing the word Error

Question 3

    Your friend, Alice, is starting a dog walking business. She already has K dog walkers employed, and today there are N dogs that need to be walked. Each dog walker can walk multiple dogs at the same time, so the dogs will be arranged into K nonempty groups, and each group will then be walked by a single dog walker. However, smaller dogs can be aggressive towards larger dogs, and that makes it harder to walk them together.

    More formally, if the smallest dog in a group has size a, and the largest dog in the group has size b, then the range of the group is defined as b-a. In particular, the range of a group consisting of a single dog is 0. The smaller the range of a group is, the easier it is to walk that particular group. Hence Alice would like to distribute the dogs among the dog walkers so that the sum of ranges of the groups is minimized. Also, since she doesn’t want any of the dog walkers to feel left out, she makes sure each dog walker gets to walk at least one dog.

    Given N, K and the sizes of the dogs, can you help Alice determine what is the minimum sum of ranges over the K groups if the dogs are arranged optimally?

    Input Format

    The first line of input contains t, 1 ≤ t ≤ 5, which gives the number of test cases.

    Each test case starts with a line containing two integers N, the number of dogs, and K, the number of employees, separated by a single space. Then N lines follow, one for each dog, containing an integer x representing the size of the corresponding dog.

    Constraints

    1 ≤ K ≤ N ≤ 10⁵, 0 ≤ x ≤ 10⁹

    Output Format

    For each test case, you should output, on a line by itself, the minimum sum of ranges over the K groups if the dogs are arranged optimally.

