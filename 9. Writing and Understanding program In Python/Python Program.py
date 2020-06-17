#!/usr/bin/env python
# coding: utf-8

# Q-1. Program that Return the sum of the numbers in the array, except ignore sections of numbers starting with a 6 and extending      to the next 9 :-
# 

# In[2]:


def summer_69(arr):
    total = 0
    add = True
    for num in arr:
        while add:
            if num != 6:
                total += num
                break
            else:
                add = False
        while not add:
            if num != 9:
                break
            else:
                add = True
                break
    return total


# In[3]:


summer_69([1,2,3,5,6,7,8,9,11])


# In[ ]:




