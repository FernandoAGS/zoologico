package AnimalesZologicos;

import javax.swing.JOptionPane;
import java.util.*;
public class Zoologico {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		Crealista  list1 = new Crealista();
		
		String opcion = "";
		while(opcion!="d") {
			opcion=JOptionPane.showInputDialog("Ingresa una de las opciones: \na.Agregar animal \nb.Mostrar animales por categoria \nc.Resumen \nd.Salir");
			
			if (opcion.equals("a")) {
				String TipoAnimal= "";
				TipoAnimal = JOptionPane.showInputDialog("Ingresa el tipo de animal : \na.Terrestre \nb.Acuatico \nc.Volador");
				if(TipoAnimal.equals("a")) {
					AnimalTerrestre temp;
					temp = new AnimalTerrestre("T",JOptionPane.showInputDialog("nombre"),JOptionPane.showInputDialog("pais"),
							JOptionPane.showInputDialog("Fecha,ingreso"),Integer.parseInt(JOptionPane.showInputDialog("Cantidad de patas")),
							JOptionPane.showInputDialog("Tipo comida"),Integer.parseInt(JOptionPane.showInputDialog("Horas que duerme")));
					//temp = new AnimalTerrestre("pepe","china","02-23-20",4,"dog show",12);
					list1.addAnimal(temp);
					
				}
				else if(TipoAnimal.equals("b")) {
					AnimalAcuatico temp1;
					temp1 = new AnimalAcuatico("A",JOptionPane.showInputDialog("nombre"),JOptionPane.showInputDialog("pais"),
							JOptionPane.showInputDialog("Fecha ingreso"),JOptionPane.showInputDialog("Ambiente (salado/dulce)"),
							Integer.parseInt(JOptionPane.showInputDialog("Cantidad aletas")),Integer.parseInt(JOptionPane.showInputDialog("Nivel agresion")));
					//temp = new AnimalTerrestre("pepe","china","02-23-20",4,"dog show",12);
					list1.addAnimal(temp1);	
					
			    }
				else if(TipoAnimal.equals("c")) {
					AnimalVolador temp2;
					temp2 = new AnimalVolador("A",JOptionPane.showInputDialog("nombre"),JOptionPane.showInputDialog("pais"),
							JOptionPane.showInputDialog("Fecha ingreso"),JOptionPane.showInputDialog("Color plumas"),
							Integer.parseInt(JOptionPane.showInputDialog("Tamaño")),JOptionPane.showInputDialog("Migrante"));
					//temp = new AnimalTerrestre("pepe","china","02-23-20",4,"dog show",12);
					list1.addAnimal(temp2);	
			    }

			}
		
				
				
			else if (opcion.equals("c")) {
				list1.mostrar();
			}
			else if (opcion.equals("d")){
				opcion ="d";
			}
			
			}
		}
}
