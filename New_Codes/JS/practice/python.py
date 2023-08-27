lst = [6,0,0,12]
def replace_zeros(lst):
    last_non_zero = None
    for i in range(len(lst) - 1):
        if lst[i] == 0:
            if last_non_zero is None:
                # If there are no non-zero elements to the left,
                # use the value of the first non-zero element to the right.
                next_non_zero = next((x for x in lst[i+1:] if x != 0), None)
                if next_non_zero is None:
                    break
                lst[i] = next_non_zero
            elif i - last_non_zero == 1:
                # If the previous non-zero element is immediately to the left,
                # use the value of the first non-zero element to the right.
                next_non_zero = next((x for x in lst[i+1:] if x != 0), None)
                if next_non_zero is None:
                    break
                lst[i] = next_non_zero
            else:
                # Otherwise, compute the mean of the adjacent non-zero elements.
                prev_non_zero = lst[last_non_zero]
                next_non_zero = next((x for x in lst[i+1:] if x != 0), None)
                if next_non_zero is None:
                    lst[i:] = [prev_non_zero] * (len(lst) - i)
                    break
                mean = (prev_non_zero + next_non_zero) / 2
                lst[i] = mean
        else:
            last_non_zero = i

    # Handle any remaining zeros at the end of the list.
    if 0 in lst:
        lst[lst.index(0):] = [last_non_zero] * (len(lst) - lst.index(0))

    return lst

print(replace_zeros(lst))