from charPairs import CharPairs
from decimal import *
#Word Similarity Algorithm
#Similarity(string1, string2) = 2 * number of incommon char. pairs / sum of total number of char. pairs in each string
class similarity:
    def __init__(self,string1, string2):
        #get character pairs for string1
        strChar1 = CharPairs(string1)
        self.charPair1 = strChar1.getCharPairs()
        self.charPair1Count = strChar1.getCharPairCount()
        self.string1 = string1.lower()
        #get character pairs for string2
        strChar2 = CharPairs(string2)
        self.charPair2 = strChar2.getCharPairs()
        self.charPair2Count = strChar2.getCharPairCount()
        self.string2 = string2.lower()
        #run steps
        self.find_in_common_char_pairs()
        self.calculate_similarity()
        
    def find_in_common_char_pairs(self):
        self.incommon = set(self.charPair1).intersection(self.charPair2)
        self.incommon_count = 0
        for i in self.incommon:  
            self.incommon_count += 1
    
    def calculate_similarity(self):
        numerator = 2 * self.incommon_count
        denominator = self.charPair1Count + self.charPair2Count
        getcontext().prec = 4
        self.sim = Decimal(numerator) / Decimal(denominator)
        
    def get_sim(self):
        return self.sim