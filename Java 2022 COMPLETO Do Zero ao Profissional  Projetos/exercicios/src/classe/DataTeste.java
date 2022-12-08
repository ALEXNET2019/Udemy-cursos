package classe;

public class DataTeste {
 
    public static void main(String[] args){
        Data d1 = new Data();

        Data d2 = new Data(30,11,2022);

        String dataFormatada1 = d1.obterDataFormatada();
        String dataFormatada2 = d2.obterDataFormatada();

        System.out.println(dataFormatada1);
        System.out.println(dataFormatada2);
    }

}
