def xor(string,key):
	result = ""
	for c in string:
		result += chr(ord(c) ^ key)
	return result
