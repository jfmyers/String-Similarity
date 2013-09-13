#Determine Character Pairs of a String and Return the Pairs in a List
# ex: United = ['un','ni', 'it', 'te', 'ed']
class CharPairs:
    def __init__(self, string):
        self.string = string.lower()
        self.create_char_list()
        self.create_char_pairs()
        
    def create_char_list(self):
        self.str_length = 0
        self.strChars = {}
        for char in self.string:
            self.strChars[self.str_length] = char
            self.str_length += 1
    
    def create_char_pairs(self):
        self.charPairs = []
        self.charPairCount = 0
        count = 0
        for char in self.strChars:
            if count < (self.str_length -1):
                y = count + 1
                pair = self.strChars[count] + self.strChars[y]
                self.charPairs.append(pair)
                self.charPairCount += 1
                
            count += 1
    
    def getCharPairs(self):
        return self.charPairs
        
    def getCharPairCount(self):
        return self.charPairCount 
            
        
            
            