package textfiles;

import java.io.IOException;

public class Filedata {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) throws IOException{
        
        String file_name="C:/config.txt";
                
        try {
            ReadFile file = new ReadFile( file_name );
            String[ ] aryLines = file.OpenFile( );
            
            int i;
            for ( i=0; i < aryLines.length; i++ ) {
                System.out.println( aryLines[ i ] ) ;
}
        }        
        
       catch ( IOException e ) {
            System.out.println( e.getMessage() );
}
    }
    

}

