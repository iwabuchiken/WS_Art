'''
	2016/12/08 13:41:22
	
'''

#ref http://stackoverflow.com/questions/675442/comment-out-a-python-code-block
'''
os.chdir('C:\\WORKS_2\\WS\\WS_Art\\ART_D-15_2#\\#2.1')
os.getcwd()

#['first_script.py', 'pythonfu.py']

import first_script

import sys
sys.path

# add a path to the import paths
#ref http://stackoverflow.com/questions/279237/import-a-module-from-a-relative-path
fpath = 'C:\\WORKS_2\\WS\\WS_Art\\ART_D-15_2#\\#2.1'

#if cmd_folder not in sys.path:
if fpath not in sys.path:
	sys.path.insert(0, fpath)

# get list of the imported module names
#ref http://stackoverflow.com/questions/4858100/how-to-list-imported-modules
import sys
modulenames = set(sys.modules)&set(globals())
allmodules = [sys.modules[name] for name in modulenames]

# get: console history
	=> DROP

# reload modules
#ref http://stackoverflow.com/questions/437589/how-do-i-unload-reload-a-python-module answered Oct 10 '09 at 13:36
import imp
imp.reload(pythonfu)

#### STEPS: import external file to Python-Fu console
 
# add path
fpath = 'C:\\WORKS_2\\WS\\WS_Art\\ART_D-15_2#\\#2.1'
if fpath not in sys.path:
	sys.path.insert(0, fpath)

# import file (use not the extention string; just use the trunk of the file name)
# => i.e. if the name is "abc.py", then just use "abc" (no '.py' extension string)
import abc

# if you want to reload the file
import imp
imp.reload(abc)



'''