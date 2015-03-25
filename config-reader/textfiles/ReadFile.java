/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package textfiles;

import java.io.IOException;
import java.io.FileReader;
import java.io.BufferedReader;

public class ReadFile {
    
    private String path;
    
    public ReadFile(String file_path) {
        path = file_path;
    }
    
    public String[] OpenFile() throws IOException {
        
        FileReader fr = new FileReader(path);
        BufferedReader textReader = new BufferedReader (fr);
        
        int numberOfLines = 80;
        String[ ] textData = new String[numberOfLines];
        
        int i;

        for (i=0; i < numberOfLines; i++) {
        textData[ i ] = textReader.readLine();
        }
        
        textReader.close( );
        return textData;
    
        
   
}
    }
    

