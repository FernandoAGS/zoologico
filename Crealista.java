package AnimalesZologicos;

import java.util.*;
public class Crealista extends Animal implements Comparable<Crealista>{
	
	private List<Animal> Lista  = new ArrayList<Animal>();
	
	public void addAnimal(Animal d) {
		Lista.add(d);
	}
	
	
	public void mostrar(	) {
		
		for(Animal d :Lista) {
			d.mostrar();	
		}
	}
	
	


	@Override
	public int compareTo(Crealista o) {
		// TODO Auto-generated method stub
		return this.getTipo().compareTo(o.getTipo());
	}
	
}
