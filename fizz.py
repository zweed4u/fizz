#!/usr/bin/python3


def main():
    fizz_num = 3
    buzz_num = 5
    for number in range(1, 101):  # range - [x,y)
        output = ""
        if number % fizz_num == 0:
            output += "Fizz"
        if number % buzz_num == 0:
            output += "Buzz"
        if output == "":
            output = number
        print(output)


if __name__ == "__main__":
    main()
