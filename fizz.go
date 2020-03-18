package main

import (
	"fmt"
	"strconv"
)

func main() {
	fizzNumber := 3
	buzzNumber := 5
	for i := 1; i < 101; i++ {
		var output string
		if i%fizzNumber == 0 {
			output += "Fizz"
		}
		if i%buzzNumber == 0 {
			output += "Buzz"
		}
		if len(output) == 0 {
			output = strconv.Itoa(i)
		}
		fmt.Println(output)
	}
}
