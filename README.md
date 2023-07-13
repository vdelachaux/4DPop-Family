# 4DPop-Family

All 4DPop components, which I maintain, are compiled and notarized in a single archive.

There's a folder for each version (e.g. **4DPop-Family-20** for the component version corresponding to **4D v20**+).

In each folder, you will find a subfolder `Components`, where all components are available in compiled mode

* Users of **Windows** or macOS on **Intel** processor can use the components located in the `Components` folder.

* A **4DPop-Family-XX.dmg** file is available for macOS on **ARM** processor users, where are the _notarized components_.

Download the version corresponding to your version of 4D

## Items

<%@include file="family.md"%>

## 📌 **macOS user on ARM processor**.    
>Since version **19R5**, 4DPop components are signed and notarized.    
>In order not to break the notarization, you need to download the provided **4DPop-Family-XX.dmg** which is also signed & notarized.    
>Another method is to clone the repository…

Even if you are used to installing components in the "Components" folder of your database, you must first perform this operation to allow the components to be loaded by the system.

1. Make sure that your 4D application, placed in the "Applications" folder, has been launched at least once (I guess macOS marks the application as validated)
2. Quit 4D
3. Contextually click on the 4D application and select the "Show Package Contents" item
4. Open the "Components" folder and copy the components you want to install from the DMG
5. Launch 4D
6. Open a database, the installed components should be loaded without errors
7. Quit 4D
8. You can now move the components to the "Components" folder in your database (again, I assume macOS marks the components as released on your machine)

## 📌 **Users of Windows or macOS on Intel processor**.    

1. Download the **Source code (zip)** provided
2. Unzip the archive and copy the components you want to install into the "Components" folder next to 4D.exe or the one for your database.

## 📌 **About 19R versions**.  
>Due to a difference in the 4D compiler between the **19R5** and **19R6** releases, the **R5 version of the components** is only compatible with the **4D 19R5**. 
