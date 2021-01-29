aa = ['a','i','u','e','o']
bb = ['x','k','s','t','n','h','m','y','r','w']
ab=[]
for b in bb:
  for a in aa:
    ab.append(b+a+'.html')

print(ab)